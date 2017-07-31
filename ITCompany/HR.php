<?php

class HR extends Worker
{
    public $work = 'look and select workers';

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary= $salary;
    }

    public function doWork()
    {
        return $this->work;
    }
}