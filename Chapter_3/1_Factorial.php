<?php

// Факториал через рекурсию
function factorialRecursive(int $n): int
{
    if ($n < 0) {
        throw new InvalidArgumentException('Факториал определён только для n >= 0');
    }

    // базовый случай
    if ($n === 0 || $n === 1) {
        return 1;
    }

    // рекурсивный случай: n! = n * (n - 1)!
    return $n * factorialRecursive($n - 1);
}

// Факториал через цикл
function factorialIterative(int $n): int
{
    if ($n < 0) {
        throw new InvalidArgumentException('Факториал определён только для n >= 0');
    }

    $result = 1;

    for ($i = 2; $i <= $n; $i++) {
        $result *= $i;
    }

    return $result;
}

// Примеры вызова
$n = 5;

echo "Факториал (рекурсия) {$n}! = " . factorialRecursive($n) . PHP_EOL;
echo "Факториал (цикл)     {$n}! = " . factorialIterative($n) . PHP_EOL;

