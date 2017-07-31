<?php

require_once 'IITWorker.php';

class Candidate extends Person implements IITWorker
{
    public $wantedSalary;
    public $profile;
    
    public function __construct($name, $wantedSalary, $profile)
    {
        $this->name = $name;
        $this->wantedSalary = $wantedSalary;
        $this->profile = $profile;
    }

    public function doITWork()
    {
        return true;
    }
}