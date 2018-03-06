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
       Permissions
       <?php
        echo Permission::UpdateToDB() ? '<br>Permissions have been synced with DB!' : 'DB is already synced!';
        echo '<br><br>';
        $userData = new stdClass();
        $userData->uid = 2;
        $userData->fullname = '$userInfo->fullname';
        $userData->username = 'admin';
        $userData->email = '$userInfo->userEmail';
        //(new Guard)->Authenticate($userData);
       // var_dump(User::GetUserPermissions(2));
       var_dump($_SESSION);

       View::Render();
       ?>
   </pre>
   
</body>
</html>