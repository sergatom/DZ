<?php
$arr = array(4, 2, 5, 19, 13, 0, 10.);
$count = 0;
foreach ($arr as $value) {
    $count += 1;
}
echo "Количество элементов массива: $count";