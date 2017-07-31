<?php

class Candidate extends Person implements IITWorker
{
    protected $wantedSalary;
    protected $profile;
    
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

    public function getProfile()
    {
        return $this->profile;
    }

    public function getWantedSalary()
    {
        return $this->wantedSalary;
    }
}