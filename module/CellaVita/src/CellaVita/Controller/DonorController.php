<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace CellaVita\Controller;

use CellaVita\Form\DonorForm;
use CellaVita\Model\Entity\Donor;
use Zend\View\Model\ViewModel;
use Zend\Authentication\AuthenticationService;
use Zend\Mvc\Controller\AbstractActionController;

class DonorController extends AbstractActionController
{
    public function indexAction() {
    	// Set some layout variables
    	$this->layout()->setVariable('optionMenu', 'cadastro');
    	// Create a view object to populate
    	$indexMainView = new ViewModel();
    	#// Set the template to use for this view rendering
    	$indexMainView->setTemplate('cella-vita/index/index');
    	// Return the view for rendering
        return $indexMainView;
    }

    public function insertAction() {
        // Collect authentication info
        $auth = new AuthenticationService();
        $loggedInUser = $auth->getIdentity();
        // If not authenticated, redirect to login page
        #if ($loggedInUser == null) {
        #    return $this->redirect()->toRoute(
        #        'auth', array('action' => 'login')
        #    );
        #}
        // Otherwise, present the private content
        #else {
            $form = new DonorForm();
            $donor = new Donor();
            $form->bind($donor);

            $request = $this->getRequest();
            if ($request->isPost()) {
                $form->setData($request->getPost());
                if ($form->isValid()) {
                    return \Zend\Debug\Debug::dump($donor);
                }
            }
            return array(
                'form' => $form,
            );
        #}
    }
}
