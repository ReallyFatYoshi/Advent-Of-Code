<?php

use Knight\AdventOfCode\DayOne;

require __DIR__ . '/vendor/autoload.php';

$dayOne = new DayOne('dayOne/input.txt');
$value = $dayOne->resolve();
echo "--- Day One ---" . PHP_EOL;
echo "Floor: " . $value . PHP_EOL;
$value = $dayOne->resolvePosition(-1);
echo "First position in basement: " . $value . PHP_EOL;

