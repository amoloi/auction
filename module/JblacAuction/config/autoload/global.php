<?php
return [
    'service_manager' => [
        'factories' => [
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
        ]
    ],
    'db' => [
        'driver' => 'Pdo',
        'dsn' => 'mysql:dbname=auction;hostname=localhost',
        'driver_options' => [
       PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
        ],
    ],
    
];