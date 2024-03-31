<?php

use Knight\AdventOfCode\DayOne;
use Knight\AdventOfCode\DayThree;
use Knight\AdventOfCode\DayTwo;

require __DIR__ . '/vendor/autoload.php';

$dayOne = new DayOne('dayOne/input.txt');
$value = $dayOne->getFloor();
logger('--- Day One ---', 'green');
logger('Floor: ' . $value);
$value = $dayOne->getPosition(-1);
logger('First position in basement: ' . $value);

logger('--- Day Two ---', 'green');
$dayTwo = new DayTwo('dayTwo/input.txt');
$value = $dayTwo->wrappingPaperSquared();
logger('Square Feet: ' . $value);
$value = $dayTwo->amountOfRibbon();
logger('Amount of ribbon: ' . $value);

logger('--- Day Three ---', 'green');
$dayTwo = new DayThree('dayThree/input.txt');
$value = $dayTwo->visitedHouse();
logger('Visited Houses: ' . $value);
$value = $dayTwo->robot();
logger('Santa with Robot: ' . $value);
