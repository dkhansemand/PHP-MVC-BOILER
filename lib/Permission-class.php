<?php

class Permission extends Database
{
    public const PERM_ADMIN_PANEL_ACCESS = 0,
                 PERM_ADMIN_CREATE_USER = 1,
                 PERM_ADMIN_UPDATE_USER = 2,
                 PERM_ADMIN_DELETE_USER = 3;
    
    public static function GetPermissions() : array
    {
        $PERMS = [];
        $oClass = new ReflectionClass(__CLASS__);
        foreach($oClass->getConstants() as $CONST => $value)
        {
            if(preg_match("/PERM_*/", $CONST))
            {
                $PERMS[$CONST] = $value;
            }
        }
        return $PERMS;
    }

    
}
