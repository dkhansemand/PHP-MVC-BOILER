<?php

class View extends Core
{
    private static $DATA = null;

    public static function GetData()
    {
        return self::$DATA;
    }

    public static function Render() : void
    {
        $model = str_replace('.view.php', '', self::$View);
        if(self::CanLoadModel($model)){
            require_once __ROOT__ . DS  . 'models' . DS . $model . '.model.php';
            $modelClass = $model . 'Model';
            self::$Model = new $modelClass();
            self::$DATA = call_user_func([self::$Model, '__construct']);
        }
        
        require_once __ROOT__ . DS . 'views' . DS . self::$View;
    }

}
