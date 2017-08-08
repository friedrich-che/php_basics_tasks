<?php
$a = 20;
$b = 8;
$operator = '%';

if ($operator == '+') {
    echo (int) $a + (int) $b;
} elseif ($operator == '-') {
    echo (int) $a - (int) $b;
} elseif ($operator == '*') {
    echo (int)$a * (int)$b;
} elseif ($operator == "/") {
    if ($b != 0) {
        echo (int) $a / (int) $b;
    } else {
        echo "На 0 делить нельзя";
    }

}  elseif ($operator = '%') {
    echo (int)$a % (int)$b;
} else {
    echo "Введите значения";
}