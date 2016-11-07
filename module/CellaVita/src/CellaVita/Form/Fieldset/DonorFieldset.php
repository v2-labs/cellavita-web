<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace CellaVita\Form\Fieldset;

use Zend\Form\Fieldset;
use Zend\InputFilter\InputFilterProviderInterface;
use Zend\Stdlib\Hydrator\ClassMethods;
use CellaVita\Model\Entity\Donor;

class DonorFieldset extends Fieldset implements InputFilterProviderInterface
{
	public function __construct() {
		parent::__construct('donor');

		$this->setHydrator(new ClassMethods(false))
			 ->setObject(new Donor());

		$this->add(array(
			'name' => 'donor_name',
			'type' => 'Zend\Form\Element\Text',
			'attributes' => array(
				'id' => 'donorName',
				'size' => '35',
				'class' => 'form-control',
				'required' => 'required',
				'placeholder' => 'Type something...',
			),
		));

		$this->add(array(
			'name' => 'donor_rg_num',
			'type' => 'Zend\Form\Element\Text',
			'attributes' => array(
				'id' => 'donorRG',
				'size' => '',
				'class' => 'form-control',
				'required' => 'required',
				'placeholder' => 'Type something...',
			),
		));

		$this->add(array(
			'name' => 'donor_rg_exp',
			'type' => 'Zend\Form\Element\Text',
			'attributes' => array(
				'id' => 'donorRGExp',
				'size' => '',
				'class' => 'form-control',
				'required' => 'required',
				'placeholder' => 'Type something...',
			),
		));

		$this->add(array(
			'name' => 'donor_cpf_num',
			'type' => 'Zend\Form\Element\Text',
			'attributes' => array(
				'id' => 'donorCPF',
				'size' => '',
				'class' => 'form-control',
				'required' => 'required',
				'placeholder' => 'Type something...',
			),
		));

		$this->add(array(
			'name' => 'donor_cpf_exp',
			'type' => 'Zend\Form\Element\Text',
			'attributes' => array(
				'id' => 'donorCPFExp',
				'size' => '',
				'class' => 'form-control',
				'required' => 'required',
				'placeholder' => 'Type something...',
			),
		));

		$this->add(array(
			'name' => 'donor_sex',
			'type' => 'Zend\Form\Element\Select',
			'options' => array(
				'empty_option' => 'Selecione...',
				'value_options' => array(
					Donor::SEX_MALE => 'Masculino',
					Donor::SEX_FEMALE => 'Feminino',
				),
			),
			'attributes' => array(
				'id' => 'donorSex',
				'class' => 'form-control',
				'required' => 'required',
			),
		));

		$this->add(array(
			'name' => 'donor_weight',
			'type' => 'Zend\Form\Element\Number',
			'attributes' => array(
				'id' => 'donorWeight',
				'size' => '',
				'class' => 'form-control',
				'required' => 'required',
				'placeholder' => 'Type something...',
			),
		));

		$this->add(array(
			'name' => 'donor_height',
			'type' => 'Zend\Form\Element\Number',
			'attributes' => array(
				'id' => 'donorHeight',
				'size' => '',
				'class' => 'form-control',
				'required' => 'required',
				'placeholder' => 'Type something...',
			),
		));

		$this->add(array(
			'name' => 'donor_birthdate',
			'type' => 'Zend\Form\Element\Date',
			'attributes' => array(
				'id' => 'donorBirthdate',
				'size' => '',
				'class' => 'form-control',
				'required' => 'required',
				'placeholder' => 'Type something...',
			),
		));

		$this->add(array(
			'name' => 'donor_nation',
			'type' => 'Zend\Form\Element\Text',
			'attributes' => array(
				'id' => 'donorNation',
				'size' => '',
				'class' => 'form-control',
				'required' => 'required',
				'placeholder' => 'Type something...',
			),
		));

		$this->add(array(
			'name' => 'donor_natural',
			'type' => 'Zend\Form\Element\Text',
			'attributes' => array(
				'id' => 'donorNatural',
				'size' => '',
				'class' => 'form-control',
				'required' => 'required',
				'placeholder' => 'Type something...',
			),
		));

		$this->add(array(
			'name' => 'donor_father',
			'type' => 'Zend\Form\Element\Text',
			'attributes' => array(
				'id' => 'donorFather',
				'size' => '',
				'class' => 'form-control',
				'required' => 'required',
				'placeholder' => 'Type something...',
			),
		));

		$this->add(array(
			'name' => 'donor_mother',
			'type' => 'Zend\Form\Element\Text',
			'attributes' => array(
				'id' => 'donorMother',
				'size' => '',
				'class' => 'form-control',
				'required' => 'required',
				'placeholder' => 'Type something...',
			),
		));

		$this->add(array(
			'name' => 'donor_occupation',
			'type' => 'Zend\Form\Element\Text',
			'attributes' => array(
				'id' => 'donorOccupation',
				'size' => '',
				'class' => 'form-control',
				'required' => 'required',
				'placeholder' => 'Type something...',
			),
		));

		$this->add(array(
			'name' => 'donor_id',
			'type' => 'Zend\Form\Element\Hidden',
			'attributes' => array(
				'required' => 'required',
			),
		));

		// Add address information to fill-up
		$this->add(array(
			'name' => 'address',
			'type' => 'CellaVita\Form\Fieldset\AddressFieldset',
			'options' => array(
				'label' => 'Endereço do doador',
			),
		));

		// Add telephone information to fill-up
		$this->add(array(
			'name' => 'telephones',
			'type' => 'Zend\Form\Element\Collection',
			'options' => array(
				'label' => 'Telefones do doador',
				'count' => 1,
				'allow_add' => true,
				'template_placeholder' => '__new_telephone__',
				'should_create_template' => true,
				'target_element' => array(
					'type' => 'CellaVita\Form\Fieldset\TelephoneFieldset',
				),
			),
		));

		// Add Vaccine information to fill-up
		$this->add(array(
			'name' => 'vaccines',
			'type' => 'Zend\Form\Element\Collection',
			'options' => array(
				'label' => 'Vacinas do doador',
				'count' => 1,
				'allow_add' => true,
				'template_placeholder' => '__new_vaccine__',
				'should_create_template' => true,
				'target_element' => array(
					'type' => 'CellaVita\Form\Fieldset\VaccineFieldset',
				),
			),
		));

		// Add Travel information to fill-up
		$this->add(array(
			'name' => 'travels',
			'type' => 'Zend\Form\Element\Collection',
			'options' => array(
				'label' => 'Viagens do doador',
				'count' => 1,
				'allow_add' => true,
				'template_placeholder' => '__new_travel__',
				'should_create_template' => true,
				'target_element' => array(
					'type' => 'CellaVita\Form\Fieldset\TravelFieldset',
				),
			),
		));

		// Add Exams information to fill-up
		$this->add(array(
			'name' => 'exams',
			'type' => 'Zend\Form\Element\Collection',
			'options' => array(
				'label' => 'Exames do doador',
				'count' => 1,
				'allow_add' => true,
				'template_placeholder' => '__new_exam__',
				'should_create_template' => true,
				'target_element' => array(
					'type' => 'CellaVita\Form\Fieldset\ExamFieldset',
				),
			),
		));
	}

	public function getInputFilterSpecification() {
		return array(
			'name' => array(
				'required' => true,
			),
		);
	}
}