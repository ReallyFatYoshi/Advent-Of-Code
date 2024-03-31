<?php

declare(strict_types=1);

namespace Tests;

use Knight\AdventOfCode\DayOne;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(DayOne::class)]
final class DayOneTest extends TestCase
{
    public function testResolveFloor(): void
    {
        $dayOne = new DayOne('dayOne/test.txt');
        $value = $dayOne->resolve();

        $this->assertSame(0, $value);
    }

    public function testResolvePosition(): void
    {
        $dayOne = new DayOne('dayOne/test.txt');
        $value = $dayOne->resolvePosition(2);
        $this->assertSame(2, $value);
    }
}