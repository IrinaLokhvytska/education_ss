<?php

class HR extends Worker
{
    public static $work = 'look and select workers';

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary= $salary;
    }

    public static function doWork()
    {
        return self::$work;
    }
}