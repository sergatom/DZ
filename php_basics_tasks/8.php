<?php
$age = 1;
if (gettype($age) != 'integer'){
    echo "Введите числовое значение";
}else{
    if ($age >= 18 && $age <= 59) {
        echo 'Вам ещё работать и работать';
    } elseif ($age > 59) {
        echo 'Вам пора на пенсию';
    } elseif ($age >= 0 && $age <= 17) {
        echo 'Вам ещё рано работать';
    } else {
        echo 'Не известный возраст';
    }}