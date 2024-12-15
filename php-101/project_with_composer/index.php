<?php

require __DIR__ . "/vendor/autoload.php";

use ProjectWithComposer\Person;

$bruno = new Person("brunin", 29);

echo $bruno->name . PHP_EOL;

echo $bruno->getCPF() . PHP_EOL;

$bruno->setCpf("303.790.220-52");
echo $bruno->getCPF() . PHP_EOL;
echo $bruno->getCpfWithMask() . PHP_EOL;
