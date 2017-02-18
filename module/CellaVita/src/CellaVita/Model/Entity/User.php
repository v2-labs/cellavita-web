<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace CellaVita\Model\Entity;

class User
{
	/**
	 * Dictionary definitions
	 */
	#const A = 'C';
	#const B = 'D';

	/**
	 * Entity fields. Check its dictionary
	 */
	protected $login;
	protected $fullname;
	protected $password;

	/**
	 * Related entities
	 */
	/* NONE */

	/**
	 * Constructor for Entity
	 */
	public function __construct() {
		# ...
	}

	/**
	 * Getter and Setter functions
	 */
	public function getLogin() {
		return $this->login;
	}

	public function setLogin($value) {
		$this->login = $value;
		return $this;
	}

	public function getFullname() {
		return $this->fullname;
	}

	public function setFullname($value) {
		$this->fullname = $value;
		return $this;
	}

	public function getPassword() {
		return $this->password;
	}

	public function setPassword($value) {
		$this->password = $value;
		return $this;
	}

	public function exchangeArray(array $data) {
		$this->login    = (isset($data['login'])) ? $data['login'] : null;
		$this->fullname = (isset($data['fullname'])) ? $data['fullname'] : null;
		$this->password = (isset($data['password'])) ? $data['password'] : null;
	}
}
