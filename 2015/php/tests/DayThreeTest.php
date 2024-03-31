<?php

declare(strict_types=1);

namespace Tests;

use Knight\AdventOfCode\DayThree;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(DayThree::class)]
final class DayThreeTest extends TestCase
{
    public function testVisitedHouses(): void
    {
        $dayThree = new DayThree('dayThree/test.txt');
        $value = $dayThree->visitedHouse();
        $this->assertSame(4, $value);
    }

    public function testRobot(): void
    {
        $this->markTestIncomplete(
            'This test has not been implemented yet.',
        );
    }
}