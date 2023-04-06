<?php
use Base\Application;
use Base\Route;

require '../vendor/autoload.php';
require '../base/config.php';

$route = new Route();
$route->add('/', \App\Controller\Login::class);




$app = new Application($route);
$app->run();
