<?php

class GroupAnagrams
{
    function groupAnagrams($strs)
    {
        $result = [];
        for ($i = 0; $i < count($strs); $i++) {
            $wordArray = str_split($strs[$i]);
            sort($wordArray);
            $wordSorted = implode('', $wordArray);
            $words[$wordSorted] [] = $strs[$i];
        }

        return array_values($words);
    }
}