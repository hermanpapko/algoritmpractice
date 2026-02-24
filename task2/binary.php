<?php

function binarySearch(array $arr, $target)
{
    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);

        if ($arr[$mid] == $target) {
            return $mid;
        }

        if ($target < $arr[$mid]) {
            $high = $mid - 1;
        } else {
            $low = $mid + 1;
        }
    }

    return -1;
}

$data = [199, 15, 23, 45, 70, 88];
sort($data);
echo binarySearch($data, 23);
