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
use CellaVita\Model\Entity\Travel;

class TravelFieldset extends Fieldset implements InputFilterProviderInterface
{
	public function __construct() {
		parent::__construct('travel');

		$this->setHydrator(new ClassMethods(false))
			 ->setObject(new Travel());

		$this->add(array(
			'name' => 'travel_date',
			'type' => 'Zend\Form\Element\Date',
			'options' => array(
				'label' => 'Data:',
			),
			'attributes' => array(
				'required' => 'required',
			),
		));

		$this->add(array(
			'name' => 'travel_time',
			'type' => 'Zend\Form\Element\Text',
			'options' => array(
				'label' => 'Duração:',
			),
			'attributes' => array(
				'required' => 'required',
			),
		));

		$this->add(array(
			'name' => 'travel_location',
			'type' => 'Zend\Form\Element\Text',
			'options' => array(
				'label' => 'Local:',
			),
			'attributes' => array(
				'required' => 'required',
			),
		));

		$this->add(array(
			'name' => 'travel_id',
			'type' => 'Zend\Form\Element\Hidden',
			'options' => array(
				'label' => '',
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
#			'name' => array(
#				'required' => true,
#			),
		);
	}
}
