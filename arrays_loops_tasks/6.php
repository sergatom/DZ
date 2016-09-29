<?php

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$ru = array();
$en = array();

foreach ($arr as $key => $value){
    $en[] = $key;
    $ru[] = $value;
}
echo 'Русские названия:', "</br>";
foreach ($ru as $color2){
    echo $color2, "</br>";
}
echo "</br>", 'Английские названия:', "</br>";
foreach ($en as $color1){
    echo $color1, "</br>";
}