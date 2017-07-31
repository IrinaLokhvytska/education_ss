<?php

class Cat extends Pet
{
    use FluffyPetsTrait;

    protected $fluffiness;

    public function __construct($name, $price, $color, $fluffiness)
    {
        $this->price = $price;
        $this->name = $name;
        $this->color = $color;
        $this->kind = 'cat';
        $this->fluffiness = $fluffiness;
        
    }
    
}
