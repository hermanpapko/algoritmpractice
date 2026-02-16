<?php

class TopKFrequentElements
{
    function topKFrequent($nums, $k) {
        $newArr = array_count_values($nums);
        arsort($newArr);
        $sliced = array_slice($newArr, 0, $k, true);
        return array_keys($sliced);
    }
}