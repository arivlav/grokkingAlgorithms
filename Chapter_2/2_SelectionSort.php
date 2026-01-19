<?php

// сортировка выбором
// сложность O(n^2)
function selectionSort(array &$arr): void {
    $lastIndex = count($arr);
    // Внешний цикл для итерации по всем элементам
    for ($i = 0; $i < $lastIndex - 1; $i++) {
        // Находим индекс минимального элемента в оставшейся неотсортированной части
        $minIndex = $i;
        for ($j = $i + 1; $j < $lastIndex; $j++) {
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }
        // Меняем местами найденный минимальный элемент с первым элементом неотсортированной части
        if ($minIndex != $i) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$minIndex];
            $arr[$minIndex] = $temp;
        }
    }
}

$myList = [64, 25, 12, 22, 11];
selectionSort($myList);
print_r($myList);