<?php

declare(strict_types=1);

namespace App;

class UniqueList
{
    private ?Node $head = null;

    public function add(mixed $value): void
    {
        if ($this->contains($value)) {
            return;
        }
        $this->head = new Node($value, $this->head);
    }

    public function contains(mixed $value): bool
    {
        $current = $this->head;
        while ($current) {
            if ($current->value === $value) {
                return true;
            }
            $current = $current->next;
        }
        return false;
    }
}
