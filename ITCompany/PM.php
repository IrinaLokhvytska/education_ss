<?php

class PM extends HardSpecialist
{
    public static $work = 'organize work';

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->position = 'PM';
        $this->salary= $salary;
    }

    public static function doWork()
    {
        return self::$work;
    }
}