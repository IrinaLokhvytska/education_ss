<?php

class QC extends HardSpecialist
{
    public static $work = 'test cod';

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->position = 'QC';
        $this->salary= $salary;
    }

    public static function doWork()
    {
        return self::$work;
    }
}