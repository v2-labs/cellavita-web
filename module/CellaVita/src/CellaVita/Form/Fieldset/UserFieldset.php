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
use CellaVita\Model\Entity\User;

class UserFieldset extends Fieldset implements InputFilterProviderInterface
{
	public function __construct() {
		parent::__construct('user');

		$this->setHydrator(new ClassMethods(false))
			 ->setObject(new User());

		$this->setLabel('Login');

		$this->add(array(
			'name' => 'login',
			'type' => 'Zend\Form\Element\Text',
			'attributes' => array(
				'id' => '',
				'size' => '60',
				'class' => 'form-control',
				'required' => 'required',
				'placeholder' => 'login...',
			),
		));

		$this->add(array(
			'name' => 'fullname',
			'type' => 'Zend\Form\Element\Text',
			'attributes' => array(
				'id' => '',
				'size' => '100',
				'class' => 'form-control',
				'required' => 'required',
				'placeholder' => 'full name...',
			),
		));

		$this->add(array(
			'name' => 'password',
			'type' => 'Zend\Form\Element\Password',
			'attributes' => array(
				'id' => '',
				'size' => '40',
				'class' => 'form-control',
				'required' => 'required',
				'placeholder' => 'password...',
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
