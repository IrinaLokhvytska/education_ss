<?php

require_once 'vendor/autoload.php';


$router = new Router();

//connect controllers
$router->controllers['index'] = 'IndexController';
$router->controllers['fluffy'] = 'IndexController';
$router->controllers['white'] = 'IndexController';
$router->controllers['expensive'] = 'IndexController';

$router->execute();