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

class LoginFieldset extends Fieldset implements InputFilterProviderInterface
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
				'id' => 'form_login',
				'size' => '40',
				'class' => 'form-control',
				'required' => 'required',
				'placeholder' => 'login...',
			),
		));

		$this->add(array(
			'name' => 'password',
			'type' => 'Zend\Form\Element\Password',
			'attributes' => array(
				'id' => 'form_password',
				'size' => '30',
				'class' => 'form-control',
				'required' => 'required',
				'placeholder' => 'password...',
			),
		));
	}

	public function getInputFilterSpecification() {
		return array(
			'login' => array(
				'required' => true,
			),
            'password' => array(
                'required' => true,
            ),
		);
	}
}
