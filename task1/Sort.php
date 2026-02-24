<?php

class Sort
{
    public function bubbleSort(array $arr)
    {
        $len = count($arr);

        for ($i = 0; $i < $len; $i++) {
            for ($j = 0; $j < $len - $i - 1; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }
        return $arr;
    }

    public function quickSort(array $arr)
    {
        if (count($arr) <= 1) {
            return $arr;
        } else {
            $pivot = $arr[0];
            $less = [];
            $greater = [];
            for ($i = 1; $i < count($arr); $i++) {
                if ($arr[$i] <= $pivot) {
                    array_push($less, $arr[$i]);
                } else {
                    array_push($greater, $arr[$i]);
                }
            }
            return array_merge(quicksort($less), [$pivot], quicksort($greater));

        }
    }

    public function mergeSort(array $left, array $right): array
    {
        $result = [];
        $i = 0;
        $j = 0;
        $leftCount = count($left);
        $rightCount = count($right);

        while ($i < $leftCount && $j < $rightCount) {
            if ($left[$i] <= $right[$j]) {
                $result[] = $left[$i++];
            } else {
                $result[] = $right[$j++];
            }
        }

        while ($i < $leftCount) {
            $result[] = $left[$i++];
        }

        while ($j < $rightCount) {
            $result[] = $right[$j++];
        }

        return $result;
    }


}
