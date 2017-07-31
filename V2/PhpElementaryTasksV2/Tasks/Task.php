<?php

abstract class Task
{
    protected $isValid = false;

    abstract protected function validate();

    abstract protected function run();

    public function resolveAsString()
    {
        $result = $this->validate();
        $isValid = $this->isValid;
        if(!$isValid){
            return $result;
        } else {
            return $this->run();
        }
    }
}
