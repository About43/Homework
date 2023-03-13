<?php
require 'scripts/config.php';
require 'scripts/class.db.php';
require 'scripts/class.burger.php';

$burger = new Burger();

$email = $_POST['email'];
$name = $_POST['name'];

$adressFields = ['phone', 'street', 'home', 'part', 'appt', 'floor'];
$adress = '';
foreach ($_POST as $field => $value) {
    if ($value && in_array($field, $adressFields)) {
        $adress .= $value . ',';
    }
}
$data = ['adress' => $adress];

$user = $burger->getUserByEmail($email);

if ($user) {
    $userId = $user['id'];
    $burger->incOrders($user['id']);
    $orderNumber = $user['orders_count'] + 1;
} else {
    $orderNumber = 1;
    $userId = $burger->createUser($email, $name);
}

$orderId = $burger->addOrder($userId, $data);

echo "Ваш заказ будет доставлен по адресу: $adress<br>
Номер вашего заказа: #$orderId <br>
Это ваш $orderNumber-й заказ";
