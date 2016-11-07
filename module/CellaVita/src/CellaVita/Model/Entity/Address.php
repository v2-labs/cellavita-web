<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace CellaVita\Model\Entity;

class Address
{
	/**
	 * Dictionary definitions
	 */
	#const A = 'A';
	#const B = 'B';

	/**
	 * Entity fields. Check its dictionary
	 */
	protected $donor_id;
	protected $address_id;
	protected $address_line1;
	protected $address_line2;
	protected $address_state;
	protected $address_city;
	protected $address_zip;

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
	public function getDonorId() {
		return $this->donor_id;
	}

	public function setField($value) {
		$this->donor_id = $value;
		return $this;
	}

	public function getAddressId() {
		return $this->address_id;
	}

	public function setAddressId($value) {
		$this->address_id = $value;
		return $this;
	}

	public function getAddressLine1() {
		return $this->address_line1;
	}

	public function setAddressLine1($value) {
		$this->address_line1 = $value;
		return $this;
	}

	public function getAddressLine2() {
		return $this->address_line2;
	}

	public function setAddressLine2($value) {
		$this->address_line2 = $value;
		return $this;
	}

	public function getAddressState() {
		return $this->address_state;
	}

	public function setAddressState($value) {
		$this->address_state = $value;
		return $this;
	}

	public function getAddressCity() {
		return $this->address_city;
	}

	public function setAddressCity($value) {
		$this->address_city = $value;
		return $this;
	}

	public function getAddressZip() {
		return $this->address_zip;
	}

	public function setAddressZip($value) {
		$this->address_zip = $value;
		return $this;
	}

	public function exchangeArray(array $data) {
		$this->donor_id      = (isset($data['donor_id'])) ? $data['donor_id'] : null;
		$this->address_id    = (isset($data['address_id'])) ? $data['address_id'] : null;
		$this->address_line1 = (isset($data['address_line1'])) ? $data['address_line1'] : null;
		$this->address_line2 = (isset($data['address_line2'])) ? $data['address_line2'] : null;
		$this->address_state = (isset($data['address_state'])) ? $data['address_state'] : null;
		$this->address_city  = (isset($data['address_city'])) ? $data['address_city'] : null;
		$this->address_zip   = (isset($data['address_zip'])) ? $data['address_zip'] : null;
	}
}