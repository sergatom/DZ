<?php
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

foreach ($arr as $key => $value) {
    if ($key == 2 || $key == 5) {
        echo $value;
    } else {
        echo $value, "</br>";
    }
}