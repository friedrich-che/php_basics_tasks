<?php
$day = 7;

switch ($day) {
    case $day >= 1 && $day <= 5 :
        echo "Это рабочий день";
        break;
    case $day >= 6 && $day <= 7 :
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
}


switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день";
        break;
    case 6:
    case 7:
        echo "Это выходной день";
        break;
    default:
        echo "Это неизвестный день";
}