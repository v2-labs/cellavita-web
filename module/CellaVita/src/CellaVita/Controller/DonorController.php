<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace CellaVita\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use CellaVita\Form\CreateDonor;
use CellaVita\Model\Entity\Donor;

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
        $form = new CreateDonor();
        $donor = new Donor();
        $form->bind($donor);

        $request = $this->getRequest();
        if ($request->isPost()) {
            $form->setData($request->getPost());
            if ($form->isValid()) {
                var_dump($donor);
            }
        }
        return array(
            'form' => $form,
        );
    }
}
