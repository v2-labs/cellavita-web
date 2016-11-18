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
use CellaVita\Model\Entity\Telephone;

class TelephoneFieldset extends Fieldset implements InputFilterProviderInterface
{
	public function __construct() {
		parent::__construct('telephone');

		$this->setHydrator(new ClassMethods(false))
			 ->setObject(new Telephone());

		$this->add(array(
			'name' => 'phone_type',
			'type' => 'Zend\Form\Element\Select',
			'options' => array(
				'empty_option' => 'Selecione...',
				'value_options' => array(
					Telephone::CEL => 'Celular',
					Telephone::RES => 'Residencia',
					Telephone::TRA => 'Trabalho',
				),
			),
			'attributes' => array(
				'id' => 'phoneType',
				'class' => 'form-control',
				'required' => 'required',
			),
		));

		$this->add(array(
			'name' => 'phone_number',
			'type' => 'Zend\Form\Element\Text',
			'attributes' => array(
				'id' => 'phoneNumber',
				'class' => 'form-control',
				'required' => 'required',
			),
		));

		$this->add(array(
			'name' => 'phone_id',
			'type' => 'Zend\Form\Element\Hidden',
			'attributes' => array(
				'required' => 'required',
			),
		));

		$this->add(array(
			'name' => 'donor_id',
			'type' => 'Zend\Form\Element\Hidden',
			'attributes' => array(
				'required' => 'required',
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