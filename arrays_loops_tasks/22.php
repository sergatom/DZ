<?php

$a = 'x';
$b = '';
for ($i = 0; $i < 5; ++$i) {
    $b .= $a;
    $b .= $a;
    echo $b . "</br>";
}