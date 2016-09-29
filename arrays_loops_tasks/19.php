<?php
$arr = array(1 => 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье');
$day = date('N');
foreach ($arr as $key => $value) {
    if ($key == $day) {
        echo "<i>", $value, "</i>", "</br>";
    } else {
        echo $value, "</br>";
    }
}