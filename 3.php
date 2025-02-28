<?php
$month = readline("Введите порядковый номер месяца: ");
if ($month < 1 || $month > 12) {
    echo "Ошибка: введите число от 1 до 12";
} else {
    if ($month == 2) {
        $days = 28;
    } elseif ($month == 4 || $month == 6 || $month == 9 || $month == 11) {
        $days = 30;
    } else {
        $days = 31;
    }
    echo "$days дней";
}
