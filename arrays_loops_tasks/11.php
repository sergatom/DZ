<?php
$arr = array();
$i = 0;
    for ($i = 1; $i <= 100; $i++) {
        if (($i % 2) == 0) {
            $arr[] = $i;
        } }
foreach ($arr as $value){
    echo $value, "</br>";
}