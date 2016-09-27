<?php
$a = 10;
$b = 15;
$operator = '+';

switch ($operator){
case '+' :
    echo "$a + $b = ", $a + $b;
break;
case '-' :
    echo "$a - $b = ", $a - $b;
break;
case '/' :
    if ($b == 0)
        echo 'на ноль делить нельзя';
    else
    echo "$a / $b = ", $a / $b;
break;
case '*' :
    echo "$a * $b = ",$a * $b;
break;

case '%' :
    echo "$a % $b = ", $a % $b;
break;
default :
    echo "выберите математическое действие";
break;
}