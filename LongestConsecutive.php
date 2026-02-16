<?php

class LongestConsecutive
{
    function longestConsecutive($nums) {
        if (empty($nums)) return 0;

        sort($nums);
        $nums = array_unique($nums);
        $nums = array_values($nums);
        $longest = 1;
        $current = 1;

        for ($i = 0; $i < count($nums) - 1; $i++) {
            if ($nums[$i+1] == $nums[$i] + 1) {
                $current++;
            } else {
                $longest = max($longest, $current);
                $current = 1;
            }
        }

        return max($longest, $current);
    }
}