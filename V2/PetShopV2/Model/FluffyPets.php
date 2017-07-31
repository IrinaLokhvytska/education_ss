<?php

trait FluffyPets
{
    private $fluffyCat = 6;

    public function isFluffy()
    {
        $fluffyCat = $this->fluffyCat;
        if ($this instanceof Hamster){

            return true;
        } elseif ($this instanceof Cat){
            $fluffiness = $this->fluffiness;
            if ($fluffiness>$fluffyCat){

                return true;
            } else {

                return false;
            }
        }
    }
}