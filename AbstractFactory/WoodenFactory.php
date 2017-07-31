<?php
require_once 'Factory.php';
require_once 'Doll.php';
require_once 'Car.php';

class WoodenFactory extends Factory
{
    public $dolls;
    public $cars;

    public function produceDolls($dolls)
    {
        $this->dolls[] = $dolls;
        return new Doll($dolls);

    }

    public function produceCars($cars)
    {
        $this->cars[] = $cars;
        return new Car($cars);

    }

    public function getDolls()
    {
        return $this->dolls;
    }

    public function getCars()
    {
        return $this->cars;
    }

}