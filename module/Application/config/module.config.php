<?php

/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'contacto' => [
                'type' => Segment::class,
                'options' => [
                    'route' => '/contacto[/:action]',
                    'defaults' => [
                        'controller' => Controller\ContactoController::class,
                        'action' => 'index',
                    ],
                ],
            ],
            'inicio' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action' => 'index',
                    ],
                ],
            ],
            'application' => [
                'type' => Segment::class,
                'options' => [
                    'route' => '/application[/:action]',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action' => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\IndexController::class => InvokableFactory::class,
            Controller\ContactoController::class => InvokableFactory::class,
        ]
    ],
   /* 'service_manager' => [
		'factories' => [
		//Model\MenuTable::class => Model\Factory\MenuTableFactory::class,
		'menu' => Service\Factory\MenuTableFactory::class,
		'navi' => Navigation\Menu::class,
		],
	],*/
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => [
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
            'layout/nuevolayout' => __DIR__ . '/../view/layout/layout_otro.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
    'translator' => [
    'locale' => 'es_ES',
    'translation_file_patterns' => [
        [
            'type'     => 'phparray',
            'base_dir' => __DIR__ . '/../language',
            'pattern'  => '%s.mo',
        ],
    ],
],
];
