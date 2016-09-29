<?php

$a = '4421587557';
$a1 = $a;
$b = 0;
$c = 0;
$arr = array();
while($a) {
    $b = $a % 10;
    $a = (int)($a / 10);
    $arr[] = $b;
}
foreach ($arr as $value) {
    if ($value == 5) {
        $c += 1;
    } echo $value, "<br>";
}
echo "В числе $a1 цифра 5 встречается $c раз.";