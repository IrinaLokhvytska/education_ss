<?php

class Dev extends HardSpecialist
{
    public static $work = 'write cod';

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->position = 'DV';
        $this->salary= $salary;

    }

    public static function doWork()
    {
        return self::$work;
    }
}