<?php

class Debug
{
    private static $startTime;
    private static $endTime;

    public static function Start(){
        self::$startTime = getrusage();
    }

    public static function End(){
        self::$endTime = getrusage();
    }

    private static function runTime($ru, $rus, $index) {
        return ($ru["ru_$index.tv_sec"]*1000 + intval($ru["ru_$index.tv_usec"]/1000))
    -  ($rus["ru_$index.tv_sec"]*1000 + intval($rus["ru_$index.tv_usec"]/1000));
    }    

    public static function toString(){
        return "This process used " . self::runTime(self::$endTime, self::$startTime, "utime") .
                " ms for its computations\nIt spent " . self::runTime(self::$endTime, self::$startTime, "stime") .
                " ms in system calls\n";
    }
}