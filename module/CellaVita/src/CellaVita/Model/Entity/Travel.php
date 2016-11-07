<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace CellaVita\Model\Entity;

class Travel
{
	/**
	 * Dictionary definitions
	 */
	#const A = 'C';
	#const B = 'D';

	/**
	 * Entity fields. Check its dictionary
	 */
	protected $donor_id;
	protected $travel_id;
	protected $travel_location;
	protected $travel_date;
	protected $travel_time;

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

	public function getTravelId() {
		return $this->travel_id;
	}

	public function setTravelId($value) {
		$this->travel_id = $value;
		return $this;
	}

	public function getTravelLocation() {
		return $this->travel_location;
	}

	public function setTravelLocation($value) {
		$this->travel_location = $value;
		return $this;
	}

	public function getTravelDate() {
		return $this->travel_date;
	}

	public function setTravelDate($value) {
		$this->travel_date = $value;
		return $this;
	}

	public function getTravelTime() {
		return $this->travel_time;
	}

	public function setTravelTime($value) {
		$this->travel_time = $value;
		return $this;
	}

	public function exchangeArray(array $data) {
		$this->donor_id     = (isset($data['donor_id'])) ? $data['donor_id'] : null;
		$this->travel_id = (isset($data['travel_id'])) ? $data['travel_id'] : null;
		$this->travel_location = (isset($data['travel_location'])) ? $data['travel_location'] : null;
		$this->travel_date = (isset($data['travel_date'])) ? $data['travel_date'] : null;
		$this->travel_time = (isset($data['travel_time'])) ? $data['travel_time'] : null;
	}
}