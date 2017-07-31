<?php

class Dog extends Pet
{
    public $fluffiness;
    
    public function __construct($name, $price, $color)
    {
        $this->price = $price;
        $this->name = $name;
        $this->color = $color;
        $this->kind = 'dog';
        $this->fluffiness = $this->isFluffy();
        $this->addToFile();
    }

    public function isFluffy()
    {
        return false;
    }
    
}
