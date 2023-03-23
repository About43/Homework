<?php

use Base\Route;

include '../vendor/autoload.php';

$parts = parse_url($_SERVER['REQUEST_URI']);

$route = new Route();
/** @uses \App\Controller\User::loginAction()*/
$route->addRoute('/user/login', \App\Controller\User::class, 'login');
/** @uses \App\Controller\User::registerAction()Action()*/
$route->addRoute('/user/register', \App\Controller\User::class, 'register');
/** @uses \App\Controller\User::indexAction()*/
$route->addRoute('/blog', \App\Controller\User::class, 'index');
$route->addRoute('/blog/index', \App\Controller\User::class, 'index');

$controllerName = $route->getControllerName();
$controller = new $controllerName();

$actionName = $route->getActionName();
$controller->actionName();