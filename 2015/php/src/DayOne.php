<?php

declare(strict_types=1);

namespace Knight\AdventOfCode;

/**
 * DayOne - Advent of code solution
 */
final class DayOne
{
    protected string $contents;
    
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
     * Resolves the floor of the given input.
     *
     * @return int
     */
    public function getFloor(): int
    {
        $count = 0;
        for ($i = 0; $i < strlen($this->contents); $i++) { 
            $char = $this->contents[$i];
            $count += $char === '(' ? 1 : -1;
        }

        return $count;
    }

        
    /**
     * Resolves the floor position in the given string.
     *
     * @return int
     */
    public function getPosition(int $floor): int
    {
        $count = 0;
        for ($i = 0; $i < strlen($this->contents); $i++) { 
            $char = $this->contents[$i];
            $count += $char === '(' ? 1 : -1;

            if ($count === $floor) {
                return $i + 1;
            }
        }
    }
}
