<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace CellaVita\Model\Entity;

class Vaccine
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
	protected $vaccine_type;
	protected $vaccine_date;
	protected $vaccine_dose;

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

	public function getVaccineType() {
		return $this->vaccine_type;
	}

	public function setVaccineType($value) {
		$this->vaccine_type = $value;
		return $this;
	}

	public function getVaccineDate() {
		return $this->vaccine_date;
	}

	public function setVaccineDate($value) {
		$this->vaccine_date = $value;
		return $this;
	}

	public function getVaccineDose() {
		return $this->vaccine_dose;
	}

	public function setVaccineDose($value) {
		$this->vaccine_dose = $value;
		return $this;
	}

	public function exchangeArray(array $data) {
		$this->donor_id     = (isset($data['donor_id'])) ? $data['donor_id'] : null;
		$this->vaccine_type = (isset($data['vaccine_type'])) ? $data['vaccine_type'] : null;
		$this->vaccine_date = (isset($data['vaccine_date'])) ? $data['vaccine_date'] : null;
		$this->vaccine_dose = (isset($data['vaccine_dose'])) ? $data['vaccine_dose'] : null;
	}
}