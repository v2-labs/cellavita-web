<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace CellaVita\Model\Entity;

class Cell
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
	protected $cell_id;
	protected $cell_allotment;

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

	public function getCellId() {
		return $this->cell_id;
	}

	public function setCellId($value) {
		$this->cell_id = $value;
		return $this;
	}

	public function getCellAllotment() {
		return $this->cell_allotment;
	}

	public function setCellAllotment($value) {
		$this->cell_allotment = $value;
		return $this;
	}

	public function exchangeArray(array $data) {
		$this->donor_id       = (isset($data['donor_id'])) ? $data['donor_id'] : null;
		$this->cell_id        = (isset($data['cell_id'])) ? $data['cell_id'] : null;
		$this->cell_allotment = (isset($data['cell_allotment'])) ? $data['cell_allotment'] : null;
	}
}