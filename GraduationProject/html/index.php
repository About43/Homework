<?php
include '../vendor/autoload.php';

use App\Controller\Auth\Login;
use App\Controller\User;
include 'src/Application.php';

$app = new Application();

$userController = new User();
$userController->indexAction();

$login = new Login();
$login ->indexAction();
