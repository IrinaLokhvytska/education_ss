<?php

abstract class Worker extends Person
{
    public $salary;
    public $position;
    
    protected function getPosition()
    {
        return $this->position;
    }

}