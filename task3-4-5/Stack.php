<?php

declare(strict_types=1);

namespace App;

class Node
{
    public function __construct(
        public mixed $value,
        public ?node $next = null,
    ) {}
}

class Stack
{
    private ?Node $top = null;

    public function push(mixed $value): void
    {
        $this->top = new Node($value, $this->top);
    }

    public function pop(): mixed
    {
        $value = $this->top->value;
        $this->top = $this->top->next;
        return $value;
    }

    public function isEmpty(): bool
    {
        return $this->top === null;
    }
}

function reverseString(string $input): string
{
    $stack = new Stack();

    $chars = mb_str_split($input);

    foreach ($chars as $char) {
        $stack->push($char);
    }

    $reversed = '';
    while (!$stack->isEmpty()) {
        $reversed .= $stack->pop();
    }
    return $reversed;
}

$testData = [
    "Привет Hello, world!",
    "",
    "Лёша на полке клопа нашёл",
];

foreach ($testData as $string) {
    echo "Оригинал: '$string'" . PHP_EOL;
    echo "Инверсия: '" . reverseString($string) . "'\n";
}
