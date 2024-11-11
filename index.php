<?php
echo "Введите первое число: ";
$first = trim(fgets(STDIN));
echo "Введите второе число: ";
$second = trim(fgets(STDIN));
if ($second === "0") {
    fwrite( STDERR, "Делить на ноль нельзя" . PHP_EOL);
} else {
    if ($first != (integer)$first || $second != (integer)$second) {
        fwrite( STDERR, "Введите, пожалуйста, целочисленное число" . PHP_EOL);
    } else {
        fwrite( STDOUT, "Результат деления: " . ($first / $second) . PHP_EOL);
    }
}