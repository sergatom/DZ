<?php

$num = array(26, 17, 136, 12, 79, 15);
$result = 0;
foreach ($num as $value) {
    $result += pow($value, 2);
}
echo "Cумма квадратов элементов массива: $result";