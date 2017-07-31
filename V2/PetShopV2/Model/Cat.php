<?php

require_once 'FluffyPets.php';

class Cat extends Pet
{
    public $fluffiness;

    public function __construct($name, $price, $color, $fluffiness)
    {
        $this->price = $price;
        $this->name = $name;
        $this->color = $color;
        $this->kind = 'cat';
        $this->fluffiness = $fluffiness;
        $this->addToFile();
        
    }

    use FluffyPets;

    
}
