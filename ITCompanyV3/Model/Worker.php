<?php

abstract class Worker extends Person
{
    protected $salary;
    protected $position;
    
    public function getPosition()
    {
        return $this->position;
    }

    public function getSalary()
    {
        return $this->salary;
    }

}