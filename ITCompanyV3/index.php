<?php

require_once __DIR__ . '/vendor/autoload.php';

$router = new Router();

//connect controllers
$router->controllers['index'] = 'IndexController';

$router->execute();








