<?php

class MinStack
{
    private $stack = [];
    private $minStack = [];

    function push($val) {
        $this->stack[] = $val;

        if (empty($this->minStack) || $val <= end($this->minStack)) {
            $this->minStack[] = $val;
        } else {
            $this->minStack[] = end($this->minStack);
        }
    }

    function pop() {
        array_pop($this->stack);
        array_pop($this->minStack);
    }

    function top() {
        return end($this->stack);
    }

    function getMin() {
        return end($this->minStack);
    }
}