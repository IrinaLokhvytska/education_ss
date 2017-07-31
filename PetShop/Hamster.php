<?php

class Hamster extends Pet
{
    public function __construct($price, $color)
    {
        $this->price = $price;
        $this->color = $color;
        $this->kind='hamster';
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
        return true;
    }

    public function getName()
    {
        return false;
    }

}
