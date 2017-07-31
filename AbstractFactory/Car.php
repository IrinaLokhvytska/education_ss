<?php


class Car extends Toy
{
    public $cars;

    public function __construct($cars)
    {
        $this->cars[] = $cars;
    }

    public function sayGetClass()
    {
        return get_class($this);
    }
}