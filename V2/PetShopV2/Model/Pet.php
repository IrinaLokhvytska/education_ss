<?php

require_once 'FileConfiguration.php';

abstract class Pet
{
    public $color;
    public $price;
    public $kind;
    public $name;

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

    protected function addToFile()
    {
        $kind = $this->kind;
        $name = $this->name;
        $color = $this->color;
        $price = $this->price;
        $fluffiness = $this->isFluffy();
        $model = "$kind $name $color $price $fluffiness,";
        $file = new FileConfiguration();
        $file->addToFile($model);
    }

}
