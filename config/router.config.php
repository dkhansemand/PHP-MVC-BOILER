<?php

const DEFAULT_ROUTE = '/Home';
const ROUTES = array(
                    [
                        'path' => '/Home',
                        'controller' => 'Home',
                        'view' => 'Home.view.php'
                    ],
                    
                    [
                        'path' => '/Test/Tester',
                        'controller' => 'Test',
                        'params' => ['ID', 'More'],
                        'view' => 'Test.view.php',
                        'permissions' => [
                                            
                                         ]
                    ],
                    [
                        'path' => '/Test/Login',
                        'controller' => 'Test',
                        'params' => ['ID', 'More'],
                        'view' => 'login.view.php',
                        'permissions' => [
                                            
                                         ]
                    ]
                    ,
                    [
                        'path' => '/Test',
                        'controller' => 'Test',
                        'params' => ['Now', 'More'],
                        'view' => 'home.view.php',
                        'permissions' => []
                    ],
                    [
                        'path' => '/Login',
                        'view' => 'login.view.php',
                        'controller' => 'Login'
                    ],
                    [
                        'path' => '/Error',
                        'params' => ['ERROR_ID'],
                        'view' => 'error.view.php'
                    ]
                );
