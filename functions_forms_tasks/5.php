<?php
function slovo($u, $sl)
{
    $v = '';
    $aaa = array();
    $a = scandir($u);
    foreach ($a as $value) {
        if ($value == '.' || $value == '..' || is_dir($value)) {
            continue;
        }
        $v = $u . $value;
        if (is_readable($v)) {
            $fs = filesize($v);
            if ($fs == 0) {
                continue;
            }
            $b = fopen($v, 'r');
            $c = fread($b, $fs);
            fclose($b);
            $c = explode(' ', $c);
            foreach ($c as $value1) {
                if ($value1 == $sl) {
                    $aaa[] = $value;
                }
            }
        }
    }
    foreach ($aaa as $value3) {
        echo $value3, "</br>";
    }
}