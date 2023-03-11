<?php

$users = [];
$names = ['Ivan','Sergey','Andrew','Alexey','Roman'];

for ($i = 0; $i < 50; $i++) {
    $name = $names[rand(0, count($names) - 1)];
    $age = rand(18,45);
    $user = ['id' => $i, 'name' => $name, 'age' => $age];
    array_push($users, $user);
}

$json = json_encode($users);
file_put_contents('users.json', $json);

$json = file_get_contents('users.json');
$users = json_decode($json, true);

$nameCounts = array_count_values(array_column($users, 'name'));
print_r($nameCounts);

$ages = array_column($users, 'age');
$averageAge = array_sum($ages) / count($ages);
echo "Средний возраст: " . $averageAge . "\n";