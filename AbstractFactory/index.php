<?php

require_once 'Toy.php';
require_once 'Doll.php';
require_once 'Car.php';
require_once 'WoodenFactory.php';
require_once 'IronFactory.php';

$woodFactory = new WoodenFactory();
$ironFactory = new IronFactory();

$woodCars = $woodFactory->produceCars(15);
$woodDolls = $woodFactory->produceDolls(20);

$ironCars = $ironFactory->produceCars(20);
$ironDolls = $ironFactory->produceDolls(15);

$dolls = $woodFactory->getDolls();

$cars1 = $woodCars->sayGetClass();
$dolls1 = $woodDolls->sayGetClass();

$cars2 = $ironCars->sayGetClass();
$dolls2 = $ironDolls->sayGetClass();

$res = 'Wooden factory: '. $dolls1 . $cars1 . ' Iron Factory: '. $dolls2 . $cars2;
echo $res;