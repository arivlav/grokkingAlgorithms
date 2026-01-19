<?php
//Посчитаем сумму элементов массива через рекурсию
function sumArrayRecursive(array $arr): int {
    // Базовый случай: если массив пуст, сумма равна 0
    if (empty($arr)) {
        return 0;
    }

    // Шаг рекурсии:
    // 1. Берем первый элемент (array_shift удаляет его из массива и возвращает)
    $firstElement = array_shift($arr);

    // 2. Рекурсивно вызываем функцию для оставшегося массива
    // 3. Складываем первый элемент с результатом рекурсивного вызова
    return $firstElement + sumArrayRecursive($arr);
}

// Пример использования:
$numbers = [1, 2, 3, 4, 5];
$totalSum = sumArrayRecursive($numbers);
echo "Сумма элементов массива: " . $totalSum;

$anotherArray = [10, 20, 30];
echo "\nСумма другого массива: " . sumArrayRecursive($anotherArray);