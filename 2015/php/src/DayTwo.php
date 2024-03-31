<?php

declare(strict_types=1);

namespace Knight\AdventOfCode;

/**
 * DayTwo - Advent of code solution
 */
final class DayTwo
{
    protected array $contents;
    
    /**
     * Creates an instance of the class.
     *
     * @param  mixed $fileName
     * @return void
     */
    public function __construct(string $fileName)
    {
        $this->contents = contents($fileName);
    }
    
    /**
     * Caluclates the amount of wrapping paper in square feet.
     *
     * @return int
     */
    public function wrappingPaperSquared(): int
    {
        $feet = 0;
        foreach ($this->contents as $line) {
            [$l, $w, $h] = array_map(fn(string $char): int => intval($char), explode('x', $line));
            $list = [$w * $l, $w * $h, $h * $l];
            sort($list);

            $feet += array_sum(array_map(fn(int $num): int => $num * 2, $list)) + reset($list);
        }

        return $feet;
    }

    /**
     * Caluclates the amount of wrapping paper in square feet.
     *
     * @return int
     */
    public function amountOfRibbon(): int
    {
        $feet = 0;
        foreach ($this->contents as $line) {
            $list = array_map(fn(string $char): int => intval($char), explode('x', $line));
            sort($list);

            [$l, $w, $h] = $list;
            $feet += $l + $l + $w + $w;
            $feet += ($l * $w * $h);
        }

        return $feet;
    }
}
