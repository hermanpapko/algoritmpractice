<?php

class SearchA2DMatrix
{
    function searchMatrix($matrix, $target) {
        return in_array($target, array_merge(...$matrix));
    }

//    люблю такие решения)))
}