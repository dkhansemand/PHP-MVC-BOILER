<?php
Router::SetViewFoler(__DIR__ . DS . 'views' . DS);
Router::SetDefaultRoute('/Dashboard');
const ADMIN_ROUTES = array(
                    [
                        'path' => '/Dashboard',
                        'view' => 'dashboard.view.php',
                        'permissions' => [
                            Permission::PERM_ADMIN_PANEL_ACCESS
                        ]
                    ],
                    [
                        'path' => '/Error',
                        'params' => ['ERROR_ID'],
                        'view' => 'error.view.php'
                    ]);
