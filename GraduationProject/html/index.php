<?php

use App\Controller\Blog;
use App\Controller\User;
use Base\Route;

include '../vendor/autoload.php';

$parts = parse_url($_SERVER['REQUEST_URI']);

$route = new Route();
/** @uses \App\Controller\User::loginAction()*/
$route->addRoute('/user/login', User::class, 'login');
/** @uses \App\Controller\User::registerAction()Action()*/
$route->addRoute('/user/register', User::class, 'register');
/** @uses \App\Controller\Blog::indexAction()*/
$route->addRoute('/blog', Blog::class, 'index');
$route->addRoute('/blog/index', Blog::class, 'index');

$controllerName = $route->getControllerName();
$controller = new $controllerName;

$actionName = $route->getActionName();
$controller->actionName();