<?php


class Doll extends Toy
{
    public $dolls;

    public function __construct($dolls)
    {
        $this->dolls[] = $dolls;
    }

    public function sayGetClass()
    {
        return get_class($this);
    }
}