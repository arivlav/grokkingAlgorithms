<?php

function binarySearch(array $list, mixed $item): int|float|string|null {
    $low = 0;
    $high = count($list) - 1;

    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);
        $guess = $list[$mid];

        if ($guess === $item) {
            return $mid;
        }

        if ($guess > $item) {
            $high = $mid - 1;
        } else {
            $low = $mid + 1;
        }
    }

    return null;
}

$myList = [1, 2, 3, 4, 5, 6, 7, 8, 9];

echo binarySearch($myList, 3);
echo binarySearch($myList, -1);