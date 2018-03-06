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
                                            Permission::PERM_ADMIN_UPDATE_USER
                                         ]
                    ],
                    [
                        'path' => '/Test/Now',
                        'controller' => 'Test',
                        'params' => ['Now', 'More'],
                        'view' => 'Test.view.php',
                        'permissions' => []
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
