<?php
//Router::SetViewFoler(__DIR__ . DS . 'views' . DS);
Router::SetDefaultRoute('/Dashboard');
const ADMIN_ROUTES = array(
                    [
                        'path' => '/Dashboard',
                        'view' => 'admin'.DS.'dashboard.view.php',
                        'controller' => 'AdminController'
                    ],
                    [
                        'path' => '/test',
                        'view' => 'test.view.php'
                    ],
                    [
                        'path' => '/Error',
                        'params' => ['ERROR_ID'],
                        'view' => 'error.view.php'
                    ]);
