<?php
    require_once __DIR__ . DIRECTORY_SEPARATOR . 'init.php';
    
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
   <pre>
      
       <?php
       // echo Permission::UpdateToDB() ? '<br>Permissions have been synced with DB!' : 'DB is already synced!';
    
       // var_dump(User::GetUserPermissions(2));
       //var_dump($_SESSION);
       ?>
   </pre>
   <?php  
        require_once View::Render();
    ?>
</body>
</html>
