<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'JBlacAdmin\Controller\JBlacAdmin' => 'JBlacAdmin\Controller\JBlacAdminController',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'jblacadmin' => __DIR__ . '/../view',
        ),
    ),
);