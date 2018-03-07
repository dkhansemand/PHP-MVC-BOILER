<?php

const DEFAULT_ROUTE = '/Home';
const ROUTES = array(
                    [
                        'path' => '/Home',
                        'controller' => 'HomeController',
                        'view' => 'Home.view.php'
                    ],
                    
                    [
                        'path' => '/Test/Tester',
                        'controller' => 'TestController',
                        'params' => ['ID', 'More'],
                        'view' => 'Test.view.php',
                        'permissions' => [
                                            Permission::PERM_ADMIN_DELETE_USER
                                         ]
                    ],
                    [
                        'path' => '/Test/Login',
                        'controller' => 'TestController',
                        'params' => ['ID', 'More'],
                        'view' => 'login.view.php',
                        'permissions' => [
                                            
                                         ]
                    ]
                    ,
                    [
                        'path' => '/Test',
                        'controller' => 'TestController',
                        'params' => ['Now', 'More'],
                        'view' => 'home.view.php',
                        'permissions' => []
                    ],
                    [
                        'path' => '/Login',
                        'view' => 'login.view.php',
                        'controller' => 'LoginController'
                    ],
                    [
                        'path' => '/Error',
                        'params' => ['ERROR_ID'],
                        'view' => 'error.view.php'
                    ]
                );
