<?php

$a = 0;
$b = 0;
$max = 0;
$min = 0;
$arr = array();
for ($i = 1; $i <= 10; ++$i) {
    $arr[] = rand(1,9);
}
echo 'Исходный массив: ';
foreach ($arr as $value) {
    echo  $value;
}
$a = max($arr);
$b = min($arr);
$arr[array_search(max($arr), $arr)] = $b;
$arr[array_search(min($arr), $arr)] = $a;
echo "</br>", 'Изменёный массив: ';
foreach ($arr as $value) {
    echo $value;
}