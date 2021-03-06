<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace CellaVita\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilter;
use Zend\Stdlib\Hydrator\ClassMethods;

class UserForm extends Form
{
	public function __construct() {
		parent::__construct('user_insert');

		$this->setHydrator(new ClassMethods(false))
			 ->setInputFilter(new InputFilter())
			 ->setAttributes(array(
			 	'class' => 'form-horizontal',
				'method' => 'post',
			   ));

		$this->add(array(
			'type' => 'CellaVita\Form\Fieldset\UserFieldset',
			'options' => array(
				'use_as_base_fieldset' => true,
			),
		));

		$this->add(array(
			'name' => 'reset',
			'attributes' => array(
				'type' => 'reset',
				'class' => 'btn btn-default',
				'value' => 'Cancelar',
			),
		));

		$this->add(array(
			'name' => 'submit',
			'attributes' => array(
				'type' => 'submit',
				'class' => 'btn btn-primary',
				'value' => 'Entrar',
			),
		));
	}
}
