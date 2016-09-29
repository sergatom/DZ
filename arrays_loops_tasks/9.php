<?php
$arr = array();
$i = 0;
    for ($i = 1; $i <= 100; $i++) {
        $arr[] = $i;
    }
foreach ($arr as $value){
    echo $value, "</br>";
}