<?php

const DEFAULT_ROUTE = '/Home';
const ROUTES = array(
                    [
                        'path' => '/Home',
                        'controller' => 'Home',
                        'view' => 'Home.view.php'
                    ],
                    [
                        'path' => '/Test',
                        'controller' => 'Test',
                        'params' => ['Now', 'More'],
                        'view' => 'home.view.php',
                        'permissions' => []
                    ],
                    
                    [
                        'path' => '/Test/Tester',
                        'controller' => 'Test',
                        'params' => ['ID', 'More'],
                        'view' => 'Test.view.php',
                        'permissions' => [
                                            Permission::PERM_ADMIN_UPDATE_USER
                                         ]
                    ],
                    [
                        'path' => '/Test/Login',
                        'controller' => 'Test',
                        'params' => ['ID', 'More'],
                        'view' => 'login.view.php',
                        'permissions' => [
                                            Permission::PERM_ADMIN_UPDATE_USER
                                         ]
                    ],
                    [
                        'path' => '/Login',
                        'view' => 'login.view.php'
                    ],
                    [
                        'path' => '/Error',
                        'params' => ['ERROR_ID'],
                        'view' => 'error.view.php'
                    ]
                );
