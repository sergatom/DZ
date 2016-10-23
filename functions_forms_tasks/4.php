<?php
function d ($a)
{
    $a = scandir($a);
    foreach ($a as $value) {
        if ($value == '.' || $value == '..' || is_dir($value)) {
            continue;
        }
        echo $value, "</br>";
    }
}