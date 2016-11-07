<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace CellaVita\Controller\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use CellaVita\Controller\DonorController;

class DonorControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator) {
        $sm = $serviceLocator->getServiceLocator();
        try {
            $donorsTable = $sm->get('Donors\Model\DonorsTable');
        } catch (ServiceNotCreatedException $e) {
            $donorsTable = null;
        } catch (ExtensionNotLoadedException $e) {
            $donorsTable = null;
        }

        $controller = new DonorController($donorsTable);
        return $controller;
    }
}
