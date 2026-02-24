<?php

class SearchA2DMatrix
{
    public function searchMatrix($matrix, $target)
    {
        return in_array($target, array_merge(...$matrix));
    }

    //    люблю такие решения)))
}
