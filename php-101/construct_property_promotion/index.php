<?php

class FirstService
{
    function print_message(): void
    {
        echo "Olá from FirstService";
    }
}

class SecondService
{
    // creates SecondService without passing FirstService inside new initialization
    public function __construct(
        private FirstService $firstService = new FirstService
    ) {}

    function say_hello(): void
    {
        $this->firstService->print_message();
    }
}

// Initialized without passing FirstService
$sec = new SecondService();
$sec->say_hello();