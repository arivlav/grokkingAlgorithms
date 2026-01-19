<?php

function binarySearchRecursive(array $list, mixed $item, int $low, int $high): int|float|string|null {
    if ($low <= $high) {
        $mid = floor(($low + $high) / 2); //находим середину диапазона
        $guess = $list[$mid]; //значение, которое находится в середине

        if ($guess === $item) {
            return $mid;
        }

        //если текущее срединное значение больше искомого в качестве нового диапазона поиска берем
        //правую половину текущего диапазона
        if ($guess > $item) {
            $high = $mid - 1;
        } else { //в противном случае - левую
            $low = $mid + 1;
        }
        return binarySearchRecursive($list, $item, $low, $high);
    }
    return null;
}

$myList = [1, 2, 3, 4, 5, 6, 7, 8, 9];

echo binarySearchRecursive($myList, 3, 0, count($myList) - 1);
echo binarySearchRecursive($myList, -1, 0, count($myList) - 1);