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
		if(file_exists( __ROOT__ . DS  . 'controllers' . DS . $controllerName . '.Controller.php')){
            require_once __ROOT__  . DS . 'controllers'. DS . $controllerName . '.Controller.php';
            if(class_exists($controller.'Controller'))
            {
                $controllerName = $controller.'Controller';
                self::$Controller = new $controllerName();
                return (self::$Controller instanceof $controllerName);
            }
		} else {
            throw new Exception('ERROR: '. __ROOT__ . DS . 'controllers' . DS .  $controllerName . '.Controller.php');
            return false;
        }
    }

    public static function CanLoadView(string $view) : bool
    {
        if(file_exists( __ROOT__ . DS  . 'views' . DS . $view)){
            self::$View = $view;
            return true;
		} else {
            throw new Exception('ERROR: '. __ROOT__ . DS . 'views' . DS .  $view);
            return false;
        }
        return false;
    }

    public static function CanLoadModel(string $model) : bool
    {
        return (file_exists( __ROOT__ . DS  . 'models' . DS . $model . '.model.php'));
    }
}
