<?php

function binarySearch(array $list, mixed $item): int|float|string|null {
    //задаём изначальный диапазон поиска
    $low = 0;
    $high = count($list) - 1;

    while ($low <= $high) {
        $mid = floor(($low + $high) / 2); //находим середину диапазона
        $guess = $list[$mid]; //значение, которое находится в середине

        /*
         * если данное значение совпадает с искомым возвращаемего его
         * т.е. алгоритм "отработал"
        */
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
    }

    return null;
}

$myList = [1, 2, 3, 4, 5, 6, 7, 8, 9];

echo binarySearch($myList, 3);
echo binarySearch($myList, -1);