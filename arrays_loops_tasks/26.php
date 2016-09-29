<?php
$a = 1;
$b = NULL;
$arr = array();
for ($i = 1; $i <= 25; ++$i) {
    $arr[] = rand(-100,100);
}
echo 'Исходный массив: ';
foreach ($arr as $value) {
    echo  "$value ";
}
echo "</br>", 'Числа больше нуля имеющие четный индекс: ';
foreach ($arr as $key => $value) {
    if ($value > 0 && gettype($key / 2) == 'integer'){
        $b .= $value . '*';
        $a *= $value;
    }
}
$b = substr($b, 0, -1);
echo $b, ' = ', $a;
$a = 1;
$b = NULL;
unset($value);
echo "</br>", 'Числа больше нуля имеющие не четный индекс: ';
foreach ($arr as $key => $value) {
    if ($value > 0 && ($key % 2) > 0) {
        $b .= $value . '*';
        $a *= $value;
    }
}
$b = substr($b, 0, -1);
echo $b, ' = ', $a;