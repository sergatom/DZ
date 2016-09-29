<?php
$arr = array();
$j = 'xxxxxxxxxxxxxxxxxxxx';
    for ($i = 1; $i <=20; ++$i) {
        $arr[] = substr($j, -$i);
}
    foreach ($arr as $value) {
        echo $value, "</br>";
    }