<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace CellaVita\Controller;

use CellaVita\Form\LoginForm;
use CellaVita\Model\Entity\User;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AuthController extends AbstractActionController
{
    public function indexAction() {
    	// Set some layout variables
    	$this->layout()->setVariable('optionMenu', 'cadastro');
    	// Create a view object to populate
    	#$indexMainView = new ViewModel();
    	#// Set the template to use for this view rendering
    	#$indexMainView->setTemplate('cellavita/index/index');
    	// Return the view for rendering
        #return $indexMainView;
        return $this->redirect()->toRoute(
            'auth', array('action' => 'login')
        );
    }

    public function loginAction() {
    	// ...
        $form = new LoginForm();
        $user = new User();
        $form->bind($user);

        $request = $this->getRequest();
        if ($request->isPost()) {
            $form->setData($request->getPost());
            if ($form->isValid()) {
                return \Zend\Debug\Debug::dump($user);
            }
        }
        return array(
            'form' => $form,
        );
    }

    public function authenticationAction() {
        // ...
        return $this->redirect()->toRoute(
            'auth', array('action' => 'login')
        );
    }

    public function logoutAction() {
        // ...
        return $this->redirect()->toRoute(
            'auth', array('action' => 'login')
        );
    }
}
