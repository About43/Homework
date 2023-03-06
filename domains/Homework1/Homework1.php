<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body>
<h1>PHP</h1>
<?php
    function one()//Задание 1 начало
    {
        $name = 'Ivan';
        $age = 20;
        echo "Меня зовут $name<br/>";
        echo "Мне $age лет<br/>";
        echo '"<br/>';
        echo '!<br/>';
        echo '|<br/>';
        echo '/<br/>';
        echo "'<br/>";
        echo '"<br/>';
        echo '\<br/>'; // Задание 1 конец
    }
        one();
    const DRAWING = 80; // Задание 2 начало
    const DRAWING1 = 23;
    const DRAWING2 = 40;
    $answer = DRAWING - DRAWING1 - DRAWING2;
    echo "$answer<br>"; //Задание 2 конец
    function two() // Задание 3 начало
    {
       $age = mt_rand(0,100);
       echo "Возраст к заданию 3 - $age<br/>";
       if ($age>=18 && $age<=65){
           echo "Вам ещё работать и работать<br/>";
       } elseif ($age>65) {
           echo "Вам пора на пенсию<br/>";
       } elseif ($age<=17) {
           echo "Вам ещё рано работать<br/>";
       } else {
           echo "Неизвестный возраст<br/>";
       }
    }
    two(); //Задание 3 конец
    function three()
    { //Задание 4 начало
        $day = mt_rand(1,10);
        echo "Значение переменной дня для задания 4 - $day<br/>";
        switch ($day) {
         case $day>=1 && $day<=5;
            echo "Это рабочий день<br/>";
            break;
            case $day>=6 && $day<=7;
                echo "Это выходной день<br/>";
                break;
                case $day>=8;
                    echo "Это неизвестный день<br/>";
                    break;
        }
    }
three();
    function four(){
        $bmw = ["model"=>"X5","speed"=>"120","doors"=>"5","year"=>"2015"];
        $toyota = ["model"=>"Camry","speed"=>"150","doors"=>"5","year"=>"2017"];
        $opel = ["model"=>"Astra","speed"=>"130","doors"=>"3","year"=>"2016"];
        $Cars = ['bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel];
        foreach ($Cars as $name =>$car) {
            echo "CAR $name<br/>";
            echo "{$car['model']} {$car['speed']} {$car['doors']} {$car['year']}<br/>";
        }


    }
    four();
    function five(){
        echo '<table>';
        for($i=1; $i<=10; $i++) {
            echo '<tr>';
            for ($o=1; $o<=10; $o++) {
                $num = $i * $o;
                echo '<td>';
                if ($i % 2 == 0 && $o % 2 == 0){
                    echo "($num)";
                } elseif ($i % 2 !== 0 && $o % 2 !== 0) {
                    echo "[$num]";
                } else {
                    echo $num;
                }
                echo '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }
    five();
?>
</body>
</html>