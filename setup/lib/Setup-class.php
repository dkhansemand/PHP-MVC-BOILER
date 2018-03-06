<?php
require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'Database-class.php';

class Setup extends Database
{
    public static function CheckTables(array $tables) : bool
    {
        $QueryTablesInDB = (new self)->query("SHOW TABLES")->fetchAll();
        $matches = null;
        foreach($QueryTablesInDB as $idx => $tableName)
        {
            if(in_array($tableName->{'Tables_in_'._DB_NAME_}, $tables))
            {
                $matches++;
            }
        }
        return ( $matches === sizeof($tables) );
    }

    public static function DBConnected() : bool
    {
        return (new self)->checkConnection();
    }

    public static function CreateUserTableStructure() : bool
    {
        if(is_dir(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'sql') 
            && file_exists(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'sql' . DIRECTORY_SEPARATOR . 'UserWithRoles.sql'))
        {
            $SQL = file_get_contents(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'sql' . DIRECTORY_SEPARATOR . 'UserWithRoles.sql');
            $TableCreateQuery = (new self)->query($SQL);
            return true;
        }
        return false;
    }
}
