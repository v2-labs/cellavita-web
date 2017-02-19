<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace CellaVita;

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/',
                    'defaults' => array(
                        'controller' => 'CellaVita\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
            'auth' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/auth[/:action[/:id]]',
                    'constrains' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'CellaVita\Controller\Auth',
                        'action'     => 'index',
                    ),
                ),
            ),
            'donor' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/donor[/:action[/:id]]',
                    'constrains' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'CellaVita\Controller\Donor',
                        'action'     => 'index',
                    ),
                ),
            ),
            'culture' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/culture[/:action[/:id]]',
                    'constrains' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'CellaVita\Controller\Culture',
                        'action'     => 'index',
                    ),
                ),
            ),
            'manage' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/manage[/:action[/:id]]',
                    'constrains' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'CellaVita\Controller\Manage',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'CellaVita\Controller\Auth'
                => 'CellaVita\Controller\AuthController',
            'CellaVita\Controller\Index'
                => 'CellaVita\Controller\IndexController',
            'CellaVita\Controller\Donor'
                => 'CellaVita\Controller\DonorController',
            'CellaVita\Controller\Culture'
                => 'CellaVita\Controller\CultureController',
            'CellaVita\Controller\Manage'
                => 'CellaVita\Controller\ManageController',
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'            => __DIR__ . '/../view/layout/layout.phtml',
            'cella-vita/index/index'   => __DIR__ . '/../view/cellavita/index/index.phtml',
            'cella-vita/auth/login'    => __DIR__ . '/../view/cellavita/auth/login.phtml',
            'cella-vita/donor/insert'  => __DIR__ . '/../view/cellavita/donor/insert.phtml',
            'error/404'                => __DIR__ . '/../view/error/404.phtml',
            'error/index'              => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'factories' => array(
            'translator' => 'Zend\Mvc\Service\TranslatorServiceFactory',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
);
