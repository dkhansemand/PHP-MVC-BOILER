<?php
Router::SetViewFoler(__ROOT__ . DS . 'views' . DS);
Router::SetDefaultRoute('/Home');
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
                        'view' => 'Login.view.php',
                        'controller' => 'LoginController'
                    ],
                    [
                        'path' => '/Error',
                        'params' => ['ERROR_ID'],
                        'view' => 'error.view.php'
                    ],
                    [
                        'path' => '/Admin',
                        'layout' => 'admin',
                        'view' => 'admin'.DS.'dashboard.view.php',
                        'controller' => 'AdminController',
                        'permissions' => [
                            Permission::PERM_ADMIN_PANEL_ACCESS
                        ]
                    ],
                    [
                        'path' => '/Admin/Dashboard',
                        'layout' => 'admin',
                        'view' => 'admin'.DS.'dashboard.view.php',
                        'controller' => 'AdminController',
                        'permissions' => [
                            Permission::PERM_ADMIN_PANEL_ACCESS
                        ]
                    ]
                );
