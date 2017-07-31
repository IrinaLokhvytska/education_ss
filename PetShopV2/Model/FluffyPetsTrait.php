<?php

trait FluffyPetsTrait
{
    private $fluffyCat = 5;

    public function isFluffy()
    {
        if ($this instanceof Hamster){

            return true;
        } elseif ($this instanceof Cat){
            if ($this->fluffiness>$this->fluffyCat){

                return true;
            } else {

                return false;
            }
        }
    }
}