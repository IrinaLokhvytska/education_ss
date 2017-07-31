<?php

class Dog extends Pet
{
    public $name;

    public function __construct($name, $price, $color)
    {
        $this->price = $price;
        $this->name = $name;
        $this->color = $color;
        $this->kind = 'dog';
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function isFluffy()
    {
        return false;
    }
    
}
