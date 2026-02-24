<?php

class ContainerWithMostWater
{
    public function maxArea($height)
    {
        $maxArea = 0;
        $left = 0;
        $right = count($height) - 1;

        while ($left < $right) {
            $width = $right - $left;

            $currentHeight = min($height[$left], $height[$right]);

            $maxArea = max($maxArea, $currentHeight * $width);

            if ($height[$left] < $height[$right]) {
                $left++;
            } else {
                $right--;
            }
        }

        return $maxArea;
    }
}
