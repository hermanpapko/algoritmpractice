<?php

function linearSearch(array $arr, $target)
{
    foreach ($arr as $index => $value) {
        if ($value === $target) {
            return $index;
        }
    }
    return -1;
}

$data = [10, 23, 45, 70, 11, 15];
echo linearSearch($data, 70);
