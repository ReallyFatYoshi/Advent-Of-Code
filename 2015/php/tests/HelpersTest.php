<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\Attributes\CoversFunction;
use PHPUnit\Framework\Attributes\UsesClass;
use PHPUnit\Framework\TestCase;

#[CoversFunction('contents')]
final class HelpersTest extends TestCase
{
    public function testContents(): void
    {
        $contents = contents('dayOne/test.txt');
        $this->assertSame('(())', $contents);
    }
}
