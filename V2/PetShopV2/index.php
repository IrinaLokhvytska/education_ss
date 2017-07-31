<?php

require_once 'Model/Router.php';
require_once 'Controller/IndexController.php';

$router = new Router();

//connect controllers
$router->controllers['index'] = new IndexController();
$router->controllers['fluffy'] = new IndexController();
$router->controllers['white'] = new IndexController();
$router->controllers['expensive'] = new IndexController();

$router->execute();