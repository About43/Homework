<?php
function task1(array $strings, bool $return = true)
{
    $result = implode("\n",array_map(function (string $str){
        return "<p>$str</p>";
    }, $strings));
    if($return) {
        return $result;
    }
    echo $result;
}

function task2($operation, ...$numbers) {
    $result = 0;
    switch ($operation) {
        case '+':
            $result = array_sum($numbers);
            break;
        case '-':
            $result = $numbers[0];
            foreach (array_slice($numbers, 1) as $num) {
                $result -= $num;
            }
            break;
        case '*':
            $result = array_product($numbers);
            break;
        case '/':
            $result = $numbers[0];
            foreach (array_slice($numbers, 1) as $num) {
                $result /= $num;
            }
            break;
    }
    echo implode(" $operation ", $numbers) . " = $result";
}

function task3($num1, $num2) {
    if (!is_int($num1) || !is_int($num2)) {
        echo "Error: функция должна принимать два целых числа!";
        return;
    }
    echo "<table>";
    for ($i = 1; $i <= $num1; $i++) {
        echo "<tr>";
        for ($o = 1; $o <= $num2; $o++) {
            echo "<td>" . $i * $o . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

echo date('d.m.Y H:i') . '<br/>';
echo strtotime('24.02.2016 00:00:00') . '<br/>';

$str1 = "Карл у Клары украл Кораллы";
$str1 = str_replace("К", "", $str1);
echo $str1;

$str2 = "Две бутылки лимонада";
$str2 = str_replace("Две", "Три", $str2);
echo $str2;

$file = fopen("test.txt", "w");
fwrite($file, "Hello again!");
fclose($file);
function displayFileContent($filename) {
    $file = fopen($filename, "r");
    if ($file) {
        while (($line = fgets($file)) !== false) {
            echo $line;
        }
        fclose($file);
    } else {
        echo "Не удалось открыть файл.";
    }
}





