<?php
$arr = array(1 => 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь');
$month = date('n');
foreach ($arr as $key => $value) {
    if ($key == $month) {
        echo "<b>", $value, "</b>", "</br>";
    } else {
        echo $value, "</br>";
    }
}