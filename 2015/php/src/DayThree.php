<?php

declare(strict_types=1);

namespace Knight\AdventOfCode;

/**
 * DayThree - Advent of code solution
 */
final class DayThree
{
    protected string  $contents;
    
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
     * Calculates the visited houses.
     * 
     * @return int
     */
    public function visitedHouse(): int
    {
        $cordinates = [];
        $x = 0;
        $y = 0;
        for ($i = 0; $i < strlen($this->contents); $i++) { 
            array_push($cordinates, "$x, $y");

            $char = $this->contents[$i];
            switch ($char) {
                case '^':
                    $y++;
                    break;
                case 'v':
                    $y--;
                    break;
                case '>':
                    $x++;
                    break;
                case '<':
                    $x--;
                    break;
            }

            array_push($cordinates, "$x, $y");
        }

        return count(array_unique($cordinates));
    }

    public function robot(): int {
        $value = $this->visitedHouse() - 1;
        return $value * 2;
    }
}
