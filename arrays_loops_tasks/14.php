<?php
$arr = array(4, 2, 5, 19, 13, 0, 10);
$e = 2;
$e1 = 3;
$e2 = 4;
foreach ($arr as $value) {
    if ($value == $e || $value == $e1 || $value == $e2) {
        echo 'Есть!'; break;
    } else {
        echo 'Нет!'; break;
    }
}