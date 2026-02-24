<?php

class EvaluateReversePolishNotation
{
    public function evalRPN($tokens)
    {
        $operators = ['+', '-', '*', '/'];
        $stack = [];
        foreach ($tokens as $token) {
            if (in_array($token, $operators)) {
                $b = array_pop($stack);
                $a = array_pop($stack);

                $result = match ($token) {
                    '+' => $a + $b,
                    '-' => $a - $b,
                    '*' => $a * $b,
                    '/' => intval($a / $b),
                };

                array_push($stack, $result);
            } else {
                array_push($stack, (int) $token);
            }
        }
        return array_pop($stack);

    }
}
