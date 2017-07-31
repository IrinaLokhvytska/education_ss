<?php

abstract class Pet
{
    public $color;
    public $price;
    public $kind;

    abstract function getName();

    abstract function getColor();

    abstract function getKind();

    abstract function getPrice();

    abstract function isFluffy();

}
