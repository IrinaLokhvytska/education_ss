<?php

abstract class Pet
{
    protected $color;
    protected $price;
    protected $kind;
    protected $name;

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

}
