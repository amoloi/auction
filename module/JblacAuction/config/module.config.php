<?php
return array(
    'router' => [
        'routes' => [
            'auction' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/auction[/:action[/:id]]',
                    'defaults' => [
                        '__NAMESPACE__' => 'JBlacAuction\Controller',
                        'controller' => 'Auction',
                        'action' => 'index',
                    ],
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-A0-9_-]*',
                        'id' => '[0-9]+'
                    ],                    
                ],
            ],
        ],
    ],
    'controllers' => array(
        'invokables' => array(
            'JBlacAuction\Controller\Auction' => 'JBlacAuction\Controller\AuctionController',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'jblacauction' => __DIR__ . '/../view',
        ),
    ),
    'service_manager' => [
        'factories' => [
            'Zend\Db\Adapter\Adapter' => function($sm){
                $config = $sm->get('Config');
                $dbParams = $config['dbParams'];
                
                return new Zend\Db\Adapter\Adapter([
                    'driver' => 'pdo',
                    'dsn' => 'mysql:dbname=' . $dbParams['database']
                             .';host=' . $dbParams['hostname'],
                    'database' => $dbParams['database'],
                    'username' => $dbParams['username'],
                    'password' => $dbParams['password'],
                    'hostname' => $dbParams['hostname'],
                ]);
            }
        ]
    ]
);