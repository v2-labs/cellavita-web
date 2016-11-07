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
use CellaVita\Model\Entity\Address;

class AddressFieldset extends Fieldset implements InputFilterProviderInterface
{
	public function __construct() {
		parent::__construct('address');

		$this->setHydrator(new ClassMethods(false))
			 ->setObject(new Address());

		$this->setLabel('Endereço');

		$this->add(array(
			'name' => 'address_line1',
			'type' => 'Zend\Form\Element\Text',
			'attributes' => array(
				'id' => '',
				'size' => '',
				'class' => 'form-control',
				'required' => 'required',
				'placeholder' => 'Type something...',
			),
		));

		$this->add(array(
			'name' => 'address_line2',
			'type' => 'Zend\Form\Element\Text',
			'attributes' => array(
				'id' => '',
				'size' => '',
				'class' => 'form-control',
				'required' => 'required',
				'placeholder' => 'Type something...',
			),
		));

		$this->add(array(
			'name' => 'address_state',
			'type' => 'Zend\Form\Element\Text',
			'attributes' => array(
				'id' => '',
				'size' => '',
				'class' => 'form-control',
				'required' => 'required',
				'placeholder' => 'Type something...',
			),
		));

		$this->add(array(
			'name' => 'address_city',
			'type' => 'Zend\Form\Element\Text',
			'attributes' => array(
				'id' => '',
				'size' => '',
				'class' => 'form-control',
				'required' => 'required',
				'placeholder' => 'Type something...',
			),
		));

		$this->add(array(
			'name' => 'address_zip',
			'type' => 'Zend\Form\Element\Text',
			'attributes' => array(
				'id' => '',
				'size' => '',
				'class' => 'form-control',
				'required' => 'required',
				'placeholder' => 'Type something...',
			),
		));

		$this->add(array(
			'name' => 'address_id',
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
