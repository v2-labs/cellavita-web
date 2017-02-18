<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Api\Client;

use Zend\Authentication\Adapter\AdapterInterface;
use Zend\Authentication\Result;
use Zend\Stdlib\Hydrator\ClassMethods;
use Users\Entity\User;
use Api\Client\ApiClient;

class Api implements AdapterInterface {
	private $username = null;
	private $password = null;

	public function __construct($username, $password) {
		$this->username = $username;
		$this->password = $password;
	}

	public function authenticate() {
		$result = ApiClient::authenticate(array(
			'login'    => $this->username,
			'password' => $this->password,
		));
		if ($result['result'] === true) {
			$hydrator = new ClassMethods();
			$user = $hydrator->hydrate(
				ApiClient::get('user', $this->username), new User()
			);
			$response = new Result(
				Result::SUCCESS,
				$user,
				array('Authentication successful.')
			);
		}
		else {
			$response = new Result(
				Result::FAILURE,
				NULL,
				array('Invalid credentials.')
			);
		}
		return $response;
	}
}
