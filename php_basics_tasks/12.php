<?php
$day = rand (1, 31);
switch ($day) {
    case 1:
        echo "Это рабочий день: $day";
        break;
    case 2:
        echo "Это рабочий день: $day";
        break;
    case 3:
        echo "Это рабочий день: $day";
        break;
    case 4:
        echo "Это рабочий день: $day";
        break;
    case 5:
        echo "Это рабочий день: $day";
        break;
    case 6:
        echo "Это выходной день: $day";
        break;
    case 7:
        echo "Это выходной день: $day";
        break;
    default:
        echo "Это неизвестный день: $day";
        break;
}