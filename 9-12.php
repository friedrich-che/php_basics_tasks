/*
<p>9. Создайте переменную day и присвойте ей произвольное числовое значение.</p>

<p>10. С помощью конструкции switch выведите фразу: "Это рабочий день", если значение переменной day попадает в диапазон чисел от 1 до 5 (включительно).</p>

<p>11. С помощью конструкции switch выведите фразу: "Это выходной день", если значение переменной day попадает в диапазон чисел от 6 до 7 (включительно).</p>

<p>12. С помощью конструкции switch выведите фразу: "Неизвестный день", если значение переменной day не попадает в диапазон чисел от 1 до 7 (включительно).</p>
*/

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