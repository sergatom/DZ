<?php
$b = 0;
for ($i = 1; $i <= 9; $i++ ) {
        $b .= $i;
        $b[$i] = ($b[$i] * 0) + 1;
        echo $b * (strlen($b) - 1), "</br>";
    }