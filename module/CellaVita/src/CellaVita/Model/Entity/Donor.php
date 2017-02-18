<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace CellaVita\Model\Entity;

class Donor
{
	/**
	 * Dictionary definitions
	 */
	const SEX_MALE = 'M';
	const SEX_FEMALE = 'F';

	/**
	 * Donors fields. Check its dictionary
	 */
	protected $donor_id;
	protected $donor_name;
	protected $donor_rg_num;
	protected $donor_rg_exp;
	protected $donor_cpf_num;
	protected $donor_cpf_exp;
	protected $donor_sex;
	protected $donor_weight;
	protected $donor_height;
	protected $donor_birthdate;
	protected $donor_nation;
	protected $donor_natural;
	protected $donor_father;
	protected $donor_mother;
	protected $donor_occupation;
	protected $donor_created;

	/**
	 * Related entities. Check the data model
	 */
	protected $telephones;
	protected $address;
	protected $vaccines;
	protected $travels;
	protected $exams;

	/**
	 * Constructor for Entity Donor
	 */
	public function __construct() {
		$this->donor_created = date('Y-m-d H:i:s');
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

	public function getDonorName() {
		return $this->donor_name;
	}

	public function setDonorName($value) {
		$this->donor_name = $value;
		return $this;
	}

	public function getDonorRgNum() {
		return $this->donor_rg_num;
	}

	public function setDonorRgNum($value) {
		$this->donor_rg_num = $value;
		return $this;
	}

	public function getDonorRgExp() {
		return $this->donor_rg_exp;
	}

	public function setDonorRgExp($value) {
		$this->donor_rg_exp = $value;
		return $this;
	}

	public function getDonorCpfNum() {
		return $this->donor_cpf_num;
	}

	public function setDonorCpfNum($value) {
		$this->donor_cpf_num = $value;
		return $this;
	}

	public function getDonorCpfExp() {
		return $this->donor_cpf_exp;
	}

	public function setDonorCpfExp($value) {
		$this->donor_cpf_exp = $value;
		return $this;
	}

	public function getDonorSex() {
		return $this->donor_sex;
	}

	public function setDonorSex($value) {
		$this->donor_sex = $value;
		return $this;
	}

	public function getDonorWeight() {
		return $this->donor_weight;
	}

	public function setDonorWeight($value) {
		$this->donor_weight = $value;
		return $this;
	}

	public function getDonorHeight() {
		return $this->donor_height;
	}

	public function setDonorHeight($value) {
		$this->donor_height = $value;
		return $this;
	}

	public function getDonorBirthdate() {
		return $this->donor_birthdate;
	}

	public function setDonorBirthdate($value) {
		$this->donor_birthdate = $value;
		return $this;
	}

	public function getDonorNation() {
		return $this->donor_nation;
	}

	public function setDonorNation($value) {
		$this->donor_nation = $value;
		return $this;
	}

	public function getDonorNatural() {
		return $this->donor_natural;
	}

	public function setDonorNatural($value) {
		$this->donor_natural = $value;
		return $this;
	}

	public function getDonorFather() {
		return $this->donor_father;
	}

	public function setDonorFather($value) {
		$this->donor_father = $value;
		return $this;
	}

	public function getDonorMother() {
		return $this->donor_mother;
	}

	public function setDonorMother($value) {
		$this->donor_mother = $value;
		return $this;
	}

	public function getDonorOccupation() {
		return $this->donor_occupation;
	}

	public function setDonorOccupation($value) {
		$this->donor_occupation = $value;
		return $this;
	}

	public function getDonorCreated() {
		return $this->donor_created;
	}

	public function setDonorCreated($value) {
		$this->donor_created = $value;
		return $this;
	}

	public function getAddress() {
		return $this->address;
	}

	public function setAddress(Address $value) {
		$this->address = $value;
		return $this;
	}

	public function getTelephones() {
		return $this->telephones;
	}

	public function setTelephones(array $value) {
		$this->telephones = $value;
		return $this;
	}

	public function getVaccines() {
		return $this->vaccines;
	}

	public function setVaccines(array $value) {
		$this->vaccines = $value;
		return $this;
	}

	public function getTravels() {
		return $this->travels;
	}

	public function setTravels(array $value) {
		$this->travels = $value;
		return $this;
	}

	public function getExams() {
		return $this->exams;
	}

	public function setExams(array $value) {
		$this->exams = $value;
		return $this;
	}

	public function exchangeArray(array $data) {
        \Zend\Debug\Debug::dump($data);

		$this->donor_id         =(isset($data['donor_id'])) ? $data['donor_id'] : null;
		$this->donor_name       =(isset($data['donor_name'])) ? $data['donor_name'] : null;
		$this->donor_rg_num     =(isset($data['donor_rg_num'])) ? $data['donor_rg_num'] : null;
		$this->donor_rg_exp     =(isset($data['donor_rg_exp'])) ? $data['donor_rg_exp'] : null;
		$this->donor_cpf_num    =(isset($data['donor_cpf_num'])) ? $data['donor_cpf_num'] : null;
		$this->donor_cpf_exp    =(isset($data['donor_cpf_exp'])) ? $data['donor_cpf_exp'] : null;
		$this->donor_sex        =(isset($data['donor_sex'])) ? $data['donor_sex'] : null;
		$this->donor_weight     =(isset($data['donor_weight'])) ? $data['donor_weight'] : null;
		$this->donor_height     =(isset($data['donor_height'])) ? $data['donor_height'] : null;
		$this->donor_birthdate  =(isset($data['donor_birthdate'])) ? $data['donor_birthdate'] : null;
		$this->donor_nation     =(isset($data['donor_nation'])) ? $data['donor_nation'] : null;
		$this->donor_natural    =(isset($data['donor_natural'])) ? $data['donor_natural'] : null;
		$this->donor_father     =(isset($data['donor_father'])) ? $data['donor_father'] : null;
		$this->donor_mother     =(isset($data['donor_mother'])) ? $data['donor_mother'] : null;
		$this->donor_occupation =(isset($data['donor_occupation'])) ? $data['donor_occupation'] : null;
		$this->donor_created    =(isset($data['donor_created'])) ? $data['donor_created'] : null;
		/* Related One-to-One elements */
		$this->address          =(isset($data['address'])) ? $data['address'] : null;
		/* Related One-to-Many elements */
		$this->telephones       =(isset($data['telephones'])) ? $data['telephones'] : null;
		$this->vaccines         =(isset($data['vaccines'])) ? $data['vaccines'] : null;
		$this->travels          =(isset($data['travels'])) ? $data['travels'] : null;
		$this->exams            =(isset($data['exams'])) ? $data['exams'] : null;
	}
}
