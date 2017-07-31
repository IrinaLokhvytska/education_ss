<?php

class Hamster extends Pet
{
    use FluffyPetsTrait;

    protected $fluffiness;
    
    public function __construct($price, $color)
    {
        $this->name = 'Hamster';
        $this->price = $price;
        $this->color = $color;
        $this->kind='hamster';
        $this->fluffiness = $this->isFluffy();
    }

}
