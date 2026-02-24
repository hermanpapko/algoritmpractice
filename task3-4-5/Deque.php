<?php

declare(strict_types=1);

namespace App;

class Node
{
    public function __construct(
        public mixed $value,
        public ?node $next = null,
        public ?node $prev = null,
    ) {}
}

class Deque
{
    private ?Node $head = null;
    private ?Node $tail = null;

    public function isEmpty(): bool
    {
        return $this->head === null;
    }

    public function pushFront(mixed $value): void
    {
        $newNode = new Node($value, $this->head, null);

        if ($this->isEmpty()) {
            $this->tail = $newNode;
        } else {
            $this->head->prev = $newNode;
        }

        $this->head = $newNode;
    }

    public function pushBack(mixed $value): void
    {
        $newNode = new Node($value, null, $this->tail);

        if ($this->isEmpty()) {
            $this->head = $newNode;
        } else {
            $this->tail->next = $newNode;
        }

        $this->tail = $newNode;
    }

    public function popFront(): mixed
    {
        if ($this->isEmpty()) {
            return null;
        }

        $value = $this->head->value;
        $this->head = $this->head->next;

        if ($this->head === null) {
            $this->tail = null;
        } else {
            $this->head->prev = null;
        }

        return $value;
    }

    public function popBack(): mixed
    {
        if ($this->isEmpty()) {
            return null;
        }

        $value = $this->tail->value;
        $this->tail = $this->tail->prev;

        if ($this->tail === null) {
            $this->head = null;
        } else {
            $this->tail->next = null;
        }

        return $value;
    }
}
