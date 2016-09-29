<?php

$a = NULL;
for ($i = 1; $i <= 9; $i++ ) {
    for ($j = 1; $j <= 9; $j++ ) {
        if ($j == 9) {
            $a .= $i * $j . ' ' . "</br>";
        } else {
            $a .= $i * $j . ' ';
        }
    }}
echo $a;