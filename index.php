<?php

echo ("Введите два числа через пробел: \n");

$input = trim(fgets(STDIN));

$numbers = explode(' ', $input);
if (count($numbers) !== 2) {
    fwrite(STDERR, "Введите, пожалуйста, два числа через пробел.\n");
    exit(1);
}

$firstNumber = $numbers[0];
$secondNumber = $numbers[1];

if (filter_var($firstNumber, FILTER_VALIDATE_INT) === false || filter_var($secondNumber, FILTER_VALIDATE_INT) === false) {
    fwrite(STDERR, "Введите, пожалуйста, целые числа.\n");
    exit(1);
}

$firstNumber = (int) $firstNumber;
$secondNumber = (int) $secondNumber;

if ($secondNumber === 0) {
    fwrite(STDERR, "Делить на 0 нельзя.\n");
    exit(1);
}

$result = $firstNumber / $secondNumber;
echo ("Ответ: $result. \n");
?>