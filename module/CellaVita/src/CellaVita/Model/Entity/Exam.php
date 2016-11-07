<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace CellaVita\Model\Entity;

class Exam
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
	protected $exam_id;
	protected $exam_pdf;
	protected $exam_date;

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

	public function getExamId() {
		return $this->exam_id;
	}

	public function setExamId($value) {
		$this->exam_id = $value;
		return $this;
	}

	public function getExamPdf() {
		return $this->exam_pdf;
	}

	public function setExamPdf($value) {
		$this->exam_pdf = $value;
		return $this;
	}

	public function getExamDate() {
		return $this->exam_date;
	}

	public function setExamDate($value) {
		$this->exam_date = $value;
		return $this;
	}

	public function exchangeArray(array $data) {
		$this->donor_id  = (isset($data['donor_id'])) ? $data['donor_id'] : null;
		$this->exam_id   = (isset($data['exam_id'])) ? $data['exam_id'] : null;
		$this->exam_pdf  = (isset($data['exam_pdf'])) ? $data['exam_pdf'] : null;
		$this->exam_date = (isset($data['exam_date'])) ? $data['exam_date'] : null;
	}
}