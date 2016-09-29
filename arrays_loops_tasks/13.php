<?php
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$a = 0;
$i = 0;
foreach ($arr as $value) {
    foreach ($arr as $value1) {
        $a = $value*$value1;
        $i += 1;
        echo $a, " ";
        if (gettype($i / 9) == 'integer'){
            echo "</br>";
        }
    }
}