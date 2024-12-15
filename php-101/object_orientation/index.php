<?php

interface Dev
{
    public function code(): string;
}

class Developer implements Dev
{
    public function __construct(
        public string $name = "John Doe"
    ) {}

    function code(): string
    {
        return "Developer is working";
    }

    function askReview(): string
    {
        return "Developer call for review";
    }
}

class BackendDeveloper extends Developer
{
    function code(): string
    {
        return "Backend is working";
    }
}

$defaultDev = new Developer();
$bruninDev = new BackendDeveloper("Brunin");

echo $defaultDev->code() . PHP_EOL;
echo $bruninDev->code() . PHP_EOL;

echo "---------------------------------------------" . PHP_EOL;

echo $defaultDev->askReview() . PHP_EOL;
echo $bruninDev->askReview() . PHP_EOL;