<?php

require_once 'FileConfiguration.php';
require_once 'Template.php';

class PetShop
{
    private $pets = array();

    public function __construct()
    {
        $this->pets = $this->getPets();
    }

    private function getPets()
    {
        $file = new FileConfiguration();
        $pets = $file->takeFromFile();

        return $pets;
    }

    private function averagePrice()
    {
        $pets = $this->pets;
        foreach ($pets as $value) {
            if (strlen($value) > 0) {
                $output = explode(" ", $value);
                $price[] = $output[3];
            }
        }
        $averagePrice = array_sum($price) / count($price);

        return $averagePrice;
    }

    public function getExpensivePets()
    {
        $result = array();
        $pets = $this->pets;
        $averagePrice = $this->averagePrice();
        foreach ($pets as $value) {
            if (strlen($value) > 0) {
                $output = explode(" ", $value);
                $price = $output[3];
                if ($price > $averagePrice) {
                    $result[] = $value;
                }
            }
        }

        return $result;
    }

    public function getWhitePets()
    {
        $result = array();
        $pets = $this->pets;
        $expected = 'white';
        foreach ($pets as $value) {
            if (strlen($value) > 0) {
                $output = explode(" ", $value);
                $color = $output[2];
            }
            if ($color === $expected) {
                $result[] = $value;
            }
        }

        return $result;
    }

    public function getCats()
    {
        $result = array();
        $expected = 'cat';
        $pets = $this->pets;
        foreach ($pets as $value) {
            if (strlen($value) > 0) {
                $output = explode(" ", $value);
                $kind = $output[0];
            }
            if ($kind === $expected) {
                $result[] = $value;
            }
        }

        return $result;
    }

    public function getFluffyPets()
    {
        $result = array();
        $pets = $this->pets;
        $expected = '1';
        foreach ($pets as $value) {
            if (strlen($value) > 0) {
                $output = explode(" ", $value);
                $fluffiness = $output[4];
            }
            if ($fluffiness === $expected) {
                $result[] = $value;
            }
        }

        return $result;
    }

}
