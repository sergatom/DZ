<?php
$arr = array(1 => 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье');
foreach ($arr as $key => $value) {
    if ($key == 6 || $key == 7) {
        echo "<b>", $value, "</b>", "</br>";
    } else {
        echo $value, "</br>";
    }
}