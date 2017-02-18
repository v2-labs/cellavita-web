<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Api\Client;

use Zend\Http\Client;
use Zend\Http\Request;
use Zend\Json\Decoder;
use Zend\Json\Json;
use Zend\Log\Logger;
use Zend\Log\Writer\Stream;
use Zend\Session\Container;
use Zend\Cache\StorageFactory;

class ApiClient {
	# ....
	protected static $client = null;
	protected static $session = null;
	# ....
	protected static $hostURL = "http://cellavita-api.test";
	protected static $hostAPI = "/v1/%s/%s";
	protected static $oAuthSS = "/oauth";
	# ....
	protected static $hostAuth = "/v1/auth/login";

	protected static function getClientInstance() {
		if (self::$client === null) {
			self::$client = new Client();
		}
	}

	public static function authenticate($postData) {
		$url = self::$hostURL . self::$hostAuth;
		return self::doRequest($url, $postData, Request::METHOD_POST);
	}

	public static function get($service, $id) {
		$url = self::$hostURL . sprintf(self::$hostAPI, $service, $id);
		return self::doRequest($url);
	}

	public static function post($service, $id, $data) {
		$url = self::$hostURL . sprintf(self::$hostAPI, $service, $id);
		return self::doRequest($url, $data, Request::METHOD_POST);
	}

	public static function delete($service, $id) {
		$url = self::$hostURL . sprintf(self::$hostAPI, $service, $id);
		return self::doRequest($url, null, Request::METHOD_DELETE);
	}

	public static function doRequest($url, array $postData = null, $method = Request::METHOD_GET) {
		$client = self::getClientInstance();
		$client->resetParameters();
		$client->setEncType(Client::ENC_URLENCODED);
		$client->setUri($url);
		$client->setMethod($method);

		if ($postData === null) {
			$postData = array();
		}

		$postData['access_token'] = self::getSession()->accessToken;

		if ($method == Request::METHOD_POST && $postData !== null) {
			$client->setParameterPost($postData);
		}

		if (($method == Request::METHOD_GET || $method == Request::METHOD_DELETE) && $postData !== null) {
			$client->setParameterGet($postData);
		}

		$response = $client->send();

		if ($response->isSuccess()) {
			return JsonDecoder::decode($response->getBody(), Json::TYPE_ARRAY);
		}
		else {
			$logger = new Logger;
			$logger->addWriter(new Stream('data/logs/apiclient.log'));
			$logger->debug($response->getBody());
			return FALSE;
		}
	}
}

E7FREe7ZGCQ7