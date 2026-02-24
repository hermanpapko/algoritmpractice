<?php

class MinStack
{
    private $stack = [];
    private $minStack = [];

    public function push($val)
    {
        $this->stack[] = $val;

        if (empty($this->minStack) || $val <= end($this->minStack)) {
            $this->minStack[] = $val;
        } else {
            $this->minStack[] = end($this->minStack);
        }
    }

    public function pop()
    {
        array_pop($this->stack);
        array_pop($this->minStack);
    }

    public function top()
    {
        return end($this->stack);
    }

    public function getMin()
    {
        return end($this->minStack);
    }
}
