<?php

const DEFAULT_ROUTE = '/Home';
const ROUTES = array(
    [
        'path' => '/Home',
        'controller' => 'Home',
        'view' => 'Home.view.php',
        'guard' => ''
    ],
    [
        'path' => '/Test/Tester',
        'controller' => 'Test',
        'params' => ['ID', 'More'],
        'view' => 'Test.view.php',
        'guard' => ''
    ],
    [
        'path' => '/Error',
        'params' => ['ERROR_ID'],
        'view' => 'error.view.php'
    ]
);
