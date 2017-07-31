<?php

class Dog extends Pet
{
    protected $fluffiness;
    
    public function __construct($name, $price, $color)
    {
        $this->price = $price;
        $this->name = $name;
        $this->color = $color;
        $this->kind = 'dog';
        $this->fluffiness = $this->isFluffy();
    }

    public function isFluffy()
    {
        return false;
    }
    
}
