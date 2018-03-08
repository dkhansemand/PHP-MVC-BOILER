<?php
    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'init.php';
    require_once __DIR__ . DS . 'admin.routes.php';
    //ROUTES is served from router.config file
    Router::Init($_SERVER['REQUEST_URI'], ADMIN_ROUTES);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Router | Now with MVC structure</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
<h1>ADMIN</h1>
   <?php  
        require_once View::Render();
    
        if(@__DEBUG__ === true)
        {
            echo  '<br><h5>Request executed in ' .number_format((microtime(true) - $_SERVER['REQUEST_TIME']), 2) . ' sec.</h5><br>';
        }
    ?>
</body>
</html>