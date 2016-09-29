<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
echo 'Ключи: ', "</br>";
foreach ($arr as $key => $value){
    echo $key, "</br>";
}
echo "</br>", 'Элементы: ', "</br>";
foreach ($arr as $key => $value){
    echo $value, "</br>";
}