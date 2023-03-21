<?php
include '../vendor/autoload.php';

use App\Controller\Auth\Login;
use App\Controller\User;

$app = new \Base\Application();

$userController = new User();
$userController->indexAction();

$login = new Login();
$login ->indexAction();
