<?php

// сложность O(n log n)
function quickSort(array $arr): array {
    if (count($arr) <= 1) {
        return $arr; // Базовый случай: массив из 1 элемента и меньше уже отсортирован
    }

    $pivot = $arr[0]; // Выбираем первый элемент как опорный
    $left = [];
    $right = [];
    $equal = [];

    foreach ($arr as $value) {
        if ($value < $pivot) {
            $left[] = $value; // Элементы меньше опоры
        } elseif ($value > $pivot) {
            $right[] = $value; // Элементы больше опоры
        } else {
            $equal[] = $value; // Элементы равные опоре
        }
    }

    // Рекурсивно сортируем левую и правую части и объединяем результат
    return array_merge(quickSort($left), $equal, quickSort($right));
}

$myArray = [5, 2, 8, 1, 9, 4];
$sortedArray = quickSort($myArray);
print_r($sortedArray);