<?php
require_once 'PetShop.php';
require_once 'Pet.php';
require_once 'Cat.php';
require_once 'Dog.php';
require_once 'Hamster.php';

new Cat('Бегемот', 500, 'black', 7);
new Cat('Кузя', 400, 'white', 5);
new Cat('Мурка', 200, 'grey', 2);
new Cat('Вася', 950, 'white', 8);
new Cat('Стравер', 500, 'white', 0);
new Cat('Барсик', 150, 'red', 3);
new Cat('Баюн', 375, 'black', 4);

new Dog('Рекс', 300, 'white');
new Dog('Шарик', 344, 'white');
new Dog('Барон', 480, 'grey');
new Dog('Бетховен', 270, 'white');
new Dog('Пиклз', 700, 'black');

new Hamster(200, 'red');
new Hamster(270, 'white');
new Hamster(320, 'black');
new Hamster(180, 'white');
new Hamster(294, 'red');

$petShop = new PetShop();

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