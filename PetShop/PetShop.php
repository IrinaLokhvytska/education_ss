<?php

class PetShop
{
    private $pets = array();

    public function addPet($onePet)
    {
        $this->pets[] = $onePet;
    }

    private function averagePrice()
    {
        $pets = $this->pets;
        foreach($pets as $key=>$value){
            $price[] = $value->getPrice();
        }
        $averagePrice = array_sum($price)/count($price);

        return $averagePrice;
    }

    public function getExpensivePets()
    {
        $pets = $this->pets;
        $averagePrice = self::averagePrice($pets);
        foreach($pets as $key=>$value){
            $price = $value->getPrice();
            if ($price>$averagePrice){
                $result []  = $value;
            }
        }

        return $result;
    }

    public function getWhitePets()
    {
        $pets = $this->pets;
        $expected = 'white';
        foreach($pets as $key=>$value){
            $output = $value->getColor();
            if ($output === $expected){
                $result []  = $value;
            }
        }

        return $result;
    }

    public function getCats()
    {
        $pets = $this->pets;
        $expected = 'cat';
        foreach($pets as $key=>$value){
            $output = $value->getKind();
            if ($output === $expected){
                $result []  = $value;
            }
        }

        return $result;
    }

    public function getFluffyPets()
    {
        $pets = $this->pets;
        $expected = true;
        foreach($pets as $key=>$value){
            $output = $value->isFluffy();
            if ($output === $expected){
                $result []  = $value;
            }
        }

        return $result;
    }
    
}