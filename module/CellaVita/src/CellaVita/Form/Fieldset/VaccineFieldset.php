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
use CellaVita\Model\Entity\Vaccine;

class VaccineFieldset extends Fieldset implements InputFilterProviderInterface
{
	public function __construct() {
		parent::__construct('vaccine');

		$this->setHydrator(new ClassMethods(false))
			 ->setObject(new Vaccine());

		$this->add(array(
			'name' => 'vaccine_type',
			'type' => 'Zend\Form\Element\Text',
			'options' => array(
				'label' => 'Tipo:',
			),
			'attributes' => array(
				'required' => 'required',
			),
		));

		$this->add(array(
			'name' => 'vaccine_date',
			'type' => 'Zend\Form\Element\Date',
			'options' => array(
				'label' => 'Data:',
			),
			'attributes' => array(
				'required' => 'required',
			),
		));

		$this->add(array(
			'name' => 'vaccine_dose',
			'type' => 'Zend\Form\Element\Text',
			'options' => array(
				'label' => 'Dose:',
			),
			'attributes' => array(
				'required' => 'required',
			),
		));

		$this->add(array(
			'name' => 'donor_id',
			'type' => 'Zend\Form\Element\Hidden',
			'options' => array(
				'label' => '',
			),
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