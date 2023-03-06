<?php
require "../src/functions.php";

echo task1([1,2,3]) . '<br/>';
echo task1([1,2,3], return: false) . '<br/>';

echo task2('+',1,2,3,5.2) . '<br/>';

echo task3(10,10);
echo task3(5,7);
echo task3(1,0.2);

displayFileContent("test.txt");
