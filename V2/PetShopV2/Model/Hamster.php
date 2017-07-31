<?php

require_once 'FluffyPets.php';

class Hamster extends Pet
{
    public $fluffiness;
    
    public function __construct($price, $color)
    {
        $this->name = 'Hamster';
        $this->price = $price;
        $this->color = $color;
        $this->kind='hamster';
        $this->fluffiness = $this->isFluffy();
        $this->addToFile();
    }

    use FluffyPets;

}
