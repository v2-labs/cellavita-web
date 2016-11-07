<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace CellaVita\Model\Entity;

class Telephone
{
	/**
	 * Dictionary definitions
	 */
	const CEL = 'C';
	const RES = 'R';
	const TRA = 'T';

	/**
	 * Entity fields. Check its dictionary
	 */
	protected $donor_id;
	protected $phone_id;
	protected $phone_type;
	protected $phone_number;

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

	public function setDonorId($value) {
		$this->donor_id = $value;
		return $this;
	}

	public function getPhoneId() {
		return $this->phone_id;
	}

	public function setPhoneId($value) {
		$this->phone_id = $value;
		return $this;
	}

	public function getPhoneType() {
		return $this->phone_type;
	}

	public function setPhoneType($value) {
		$this->phone_type = $value;
		return $this;
	}

	public function getPhoneNumber() {
		return $this->phone_number;
	}

	public function setPhoneNumber($value) {
		$this->phone_number = $value;
		return $this;
	}

	public function exchangeArray(array $data) {
		$this->donor_id     = (isset($data['donor_id'])) ? $data['donor_id'] : null;
		$this->phone_id     = (isset($data['phone_id'])) ? $data['phone_id'] : null;
		$this->phone_type   = (isset($data['phone_type'])) ? $data['phone_type'] : null;
		$this->phone_number = (isset($data['phone_number'])) ? $data['phone_number'] : null;
	}
}