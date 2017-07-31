<?php

class PetShop
{
    private $pets = [];
    private $table = 'pets';

    public function __construct()
    {
        $this->pets = $this->getPets();
    }

    private function getPets()
    {
        $dsn = 'mysql:host=localhost;dbname=pet_shop_db';
        $user = 'root';
        $password = 'admin';
        $db = new Database($dsn, $user, $password);

        try{
            $petsDb = $db->findAll($this->table);
        } catch(Exception $e) {

            echo $e->getMessage();
        }

        return $this->createObject($petsDb);
    }

    private function createObject($petsDb)
    {
        $pets = [];

        foreach ($petsDb as $pet){
            $name = $pet['name'];
            $price = $pet['price'];
            $color = $pet['color'];
            $fluffiness = $pet['fluffiness'];
            $kind = $pet['kind'];

            if ($kind === PetsKind::CAT_KIND){
                $pets[] = new Cat($name, $price, $color, $fluffiness);
            } elseif ($kind === PetsKind::DOG_KIND){
                $pets[] = new Dog($name, $price, $color);
            } else {
                $pets[] = new Hamster($price, $color);
            }
        }

        return $pets;

    }

    private function averagePrice()
    {
        $price = [];
        foreach ($this->pets as $pet) {
            $price[] = $pet->getPrice();
        }
        $averagePrice = array_sum($price) / count($price);

        return $averagePrice;
    }

    public function getExpensivePets()
    {
        $result = [];
        foreach ($this->pets as $pet) {
            if ($pet->getPrice() > $this->averagePrice()) {
                $result[] = $pet;
            }
        }

        return $result;
    }

    public function getWhitePets()
    {
        $result = [];
        $expected = 'white';
        foreach ($this->pets as $pet) {
            if ($pet->getColor() === $expected) {
                $result[] = $pet;
            }
        }

        return $result;
    }

    public function getCats()
    {
        $result = [];
        $pets = $this->pets;
        foreach ($pets as $pet) {
            if ($pet instanceof Cat) {
                $result[] = $pet;
            }
        }

        return $result;
    }

    public function getFluffyPets()
    {
        $result = [];
        $expected = '1';
        foreach ($this->pets as $pet) {
            if ($pet->isFluffy() == $expected) {
                $result[] = $pet;
            }
        }

        return $result;
    }

}
