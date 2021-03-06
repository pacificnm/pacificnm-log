<?php
/**
 * Pacific NM (https://www.pacificnm.com)
 *
 * @link      https://github.com/pacificnm/pnm for the canonical source repository
 * @copyright Copyright (c) 20011-2016 Pacific NM USA Inc. (https://www.pacificnm.com)
 * @license
 */
return array(
    'module' => array(
        'Log' => array(
            'name' => 'Log',
            'version' => '1.0.5',
            'install' => array()
        )
    ),
    'controllers' => array(
        'factories' => array(
            'Pacificnm\Log\Controller\IndexController' => 'Pacificnm\Log\Controller\Factory\IndexControllerFactory',
            'Pacificnm\Log\Controller\ViewController' => 'Pacificnm\Log\Controller\Factory\ViewControllerFactory'
        )
    ),
    'service_manager' => array(
        'factories' => array(
            'Pacificnm\Log\Service\ServiceInterface' => 'Pacificnm\Log\Service\Factory\ServiceFactory'
        )
    ),
    'router' => array(
        'routes' => array(
            'log-index' => array(
                'pageTitle' => 'Logs',
                'pageSubTitle' => 'List',
                'activeMenuItem' => 'admin-index',
                'activeSubMenuItem' => 'log-index',
                'icon' => 'fa fa-file-text-o',
                'layout' => 'admin',
                'type' => 'literal',
                'options' => array(
                    'route' => '/admin/log',
                    'defaults' => array(
                        'controller' => 'Pacificnm\Log\Controller\IndexController',
                        'action' => 'index'
                    )
                )
            ),
            'log-view' => array(
                'pageTitle' => 'Logs',
                'pageSubTitle' => 'View',
                'activeMenuItem' => 'admin-index',
                'activeSubMenuItem' => 'log-index',
                'icon' => 'fa fa-file-text-o',
                'layout' => 'admin',
                'type' => 'segment',
                'options' => array(
                    'route' => '/admin/log/view/[:file]',
                    'defaults' => array(
                        'controller' => 'Pacificnm\Log\Controller\ViewController',
                        'action' => 'index'
                    )
                )
            )
        )
    ),
    'console' => array(
        'router' => array(
            'routes' => array()

            
        )
    ),
    'view_helpers' => array(
        'factories' => array(),
        'invokables' => array()
    ),
    'view_manager' => array(
        'controller_map' => array(
            'Pacificnm\Log' => true
        ),
        'template_map' => array(
            'pacificnm/log/index/index' => __DIR__ . '/../view/log/index/index.phtml',
            'pacificnm/log/view/index' => __DIR__ . '/../view/log/view/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view'
        )
    ),
    'acl' => array(
        'default' => array(
            'guest' => array(),
            'user' => array(),
            'administrator' => array(
                'log-index',
                'log-view'
            )
        )
    ),
    'menu' => array(
        'default' => array(
            array(
                'name' => 'Admin',
                'route' => 'admin-index',
                'icon' => 'fa fa-gear',
                'order' => 99,
                'active' => true,
                'items' => array(
                    array(
                        'name' => 'Logs',
                        'route' => 'log-index',
                        'icon' => 'fa fa-file-text-o',
                        'order' => 4,
                        'active' => true
                    )
                )
            )
        )
    ),
    'navigation' => array(
        'default' => array(
            array(
                'label' => 'Admin',
                'route' => 'admin-index',
                'useRouteMatch' => true,
                'pages' => array(
                    array(
                        'label' => 'Logs',
                        'route' => 'log-index',
                        'useRouteMatch' => true,
                        'pages' => array(
                            array(
                                'label' => 'View',
                                'route' => 'log-view',
                                'useRouteMatch' => true
                            )
                        )
                    )
                )
            )
        )
    )
);