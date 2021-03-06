<?php

return [
    'router' => [
        'routes' => [
            'home' => [
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => [
                    'route' => '/',
                    'defaults' => [
                        'controller' => 'Application\Controller\Index',
                        'action' => 'index'
                    ]
                ]
            ]
        ]
    ],
    
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => [
            __DIR__ . '/../view'
        ]
    ],
    
    'controllers' => [
        'factories' => [
            'Application\Controller\Index' => 'Application\Controller\IndexControllerFactory'
        ]
    ],
    
    'service_manager' => [
      'invokables' => [
        'loggingService' => 'Application\Service\LoggingService'
      ],
      'factories' => [
        'greetingService' => 'Application\Service\GreetingServiceFactory',
      ]
    ]
];
