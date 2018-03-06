<?php

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'database.config.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'Setup-class.php';

    if(Setup::DBConnected())
    {
        echo 'Database connection established! <br>';
        if(Setup::CheckTables(['users', 'roles', 'userroles', 'roletypes']))
        {
            echo 'User table structure exsists! It should be good to go! <br> <a href="../">Go to project index</a>';
        }else{
            echo 'User table structure not found! Creating structure... <br>';
            if(Setup::CreateUserTableStructure()
                && Setup::CheckTables(['users', 'roles', 'userroles', 'roletypes']) )
            {
                echo 'User table structure created in database "' . _DB_NAME_ . '" <br>';
            }
            else{
                echo 'Not able to create table structure! Missing directory with SQL file "UserWtihRoles.sql" in DIR "sql". <br>';
            }
        }
    }
    else
    {
        echo 'Database connection to "' . _DB_USERNAME_ . '@' . _DB_HOST_ . '" could not be established! <br> Check your "database.config.php" file, and make sure the credentials and databasename is correct. <br>';
    }
