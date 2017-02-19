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

class IndexController extends AbstractActionController
{
    public function indexAction() {
        // Set some layout variables
        $this->layout()->setVariable('optionMenu', '');
        // Create a view object to populate
        $indexMainView = new ViewModel();
        #// Set the template to use for this view rendering
        #$indexMainView->setTemplate('cellavita/index/index');
        // Return the view for rendering
        return $indexMainView;
    }
}
