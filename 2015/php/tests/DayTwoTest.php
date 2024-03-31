<?php

declare(strict_types=1);

namespace Tests;

use Knight\AdventOfCode\DayTwo;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(DayTwo::class)]
final class DayTwoTest extends TestCase
{
    public function testResolveFloor(): void
    {
        $dayTwo = new DayTwo('dayTwo/test.txt');
        $value = $dayTwo->wrappingPaperSquared();

        $this->assertSame(101, $value);
    }

    public function testResolvePosition(): void
    {
        $dayTwo = new DayTwo('dayTwo/test.txt');
        $value = $dayTwo->amountOfRibbon();
        $this->assertSame(48, $value);
    }
}