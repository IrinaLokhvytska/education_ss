<?php

class Cat extends Pet
{
    public $name;
    public $fluffiness;

    public function __construct($name, $price, $color, $fluffiness)
    {
        $this->price = $price;
        $this->name = $name;
        $this->color = $color;
        $this->kind = 'cat';
        $this->fluffiness = $fluffiness;
    }
    
    public function getName()
    {
        return $this->name;
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

    public function isFluffy()
    {
        return $this->fluffiness;
    }
    
}
