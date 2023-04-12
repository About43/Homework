<?php
use Base\Application;
use Base\Route;

require '../vendor/autoload.php';
require '../base/config.php';
require '../base/eloquent.php';

$route = new Route();
$route->add('/', \App\Controller\Login::class);
$route->add('/logout', \App\Controller\Login::class, 'logOut');
$route->add('/admin', \App\Controller\Admin\UsersList::class);
$route->add('/admin/saveUser', \App\Controller\Admin\UsersList::class, 'saveUser');
$route->add('/admin/addUser', \App\Controller\Admin\UsersList::class, 'addUser');
$route->add('/admin/deleteUser', \App\Controller\Admin\UsersList::class, 'deleteUser');




$app = new Application($route);
$app->run();
