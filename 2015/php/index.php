<?php

use Knight\AdventOfCode\DayOne;
use Knight\AdventOfCode\DayTwo;

require __DIR__ . '/vendor/autoload.php';

$dayOne = new DayOne('dayOne/input.txt');
$value = $dayOne->getFloor();
echo "--- Day One ---" . PHP_EOL;
echo "Floor: " . $value . PHP_EOL;
$value = $dayOne->getPosition(-1);
echo "First position in basement: " . $value . PHP_EOL;

echo "--- Day Two ---" . PHP_EOL;
$dayTwo = new DayTwo('dayTwo/input.txt');
$value = $dayTwo->wrappingPaperSquared();
echo "Square Feet: " . $value . PHP_EOL;
$value = $dayTwo->amountOfRibbon();
echo "Amount of ribbon: " . $value . PHP_EOL;
