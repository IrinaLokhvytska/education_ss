<?php
require_once 'PetShop.php';
require_once 'Pet.php';
require_once 'Cat.php';
require_once 'Dog.php';
require_once 'Hamster.php';

$kitten1 = new Cat('Бегемот', 500, 'black', true);
$kitten2 = new Cat('Кузя', 400, 'white', false);
$puppy1 = new Dog('Рекс', 300, 'white');
$puppy2 = new Dog('Шарик', 350, 'black');

$hamster1 = new Hamster(200, 'red');
$hamster2 = new Hamster(270, 'white');
$petShop = new PetShop();

$pets=$petShop->addPet($kitten1);
$pets=$petShop->addPet($kitten2);
$pets=$petShop->addPet($puppy1);
$pets=$petShop->addPet($puppy2);
$pets=$petShop->addPet($hamster1);
$pets=$petShop->addPet($hamster2);

echo '<h1>White pets</h1>';
$sortColor = $petShop->getWhitePets();
print_r($sortColor);
echo '<br>';

echo '<h1>Expensive pets</h1>';
$sortPrice = $petShop->getExpensivePets();
print_r($sortPrice);
echo '<br>';

echo '<h1>Cats</h1>';
$sortKitten = $petShop->getCats();
print_r($sortKitten);
echo '<br>';

echo '<h1>Fluffy pets</h1>';
$sortFluffy = $petShop->getFluffyPets();
print_r($sortFluffy);
echo '<br>';