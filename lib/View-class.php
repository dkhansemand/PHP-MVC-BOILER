<?php

class View extends Core
{

    public static function Render()
    {
        require_once __ROOT__ . DS . 'views' . DS . self::$View;
    }

}
