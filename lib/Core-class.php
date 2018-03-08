<?php

abstract class Core
{
    protected static $Controller = null,
                     $Model      = null,
                     $View       = null;
    
    protected static function CanLoadController(string $controller) : bool
    {
        $controller = ucfirst($controller);
        $controllerName = str_replace('\\', '/', $controller);
        $file = str_replace('Controller', '', $controller);
		if(file_exists( __ROOT__ . DS  . 'controllers' . DS . $file . '.Controller.php')){
            require_once __ROOT__  . DS . 'controllers'. DS . $file . '.Controller.php';
            if(class_exists($controller))
            {
                self::$Controller = new $controllerName();
                return (self::$Controller instanceof $controllerName);
            }
		} else {
            throw new Exception('ERROR: '. __ROOT__ . DS . 'controllers' . DS .  $file . '.Controller.php');
            return false;
        }
    }

    public static function CanLoadView(string $folder, string $view) : bool
    {
        if(file_exists( $folder. $view)){
            self::$View = $view;
            return true;
		} else {
            throw new Exception('ERROR: '. $folder .  $view);
            return false;
        }
        return false;
    }

    public static function CanLoadModel(string $model) : bool
    {
        return (file_exists( __ROOT__ . DS  . 'models' . DS . $model . '.model.php'));
    }
}
