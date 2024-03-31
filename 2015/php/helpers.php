<?php

/**
 * Grabs and returns the contents of a file.
 *
 * @param  mixed $fileName
 * @return string|array
 */
function contents(string $fileName): string|array
{
    $lines = file(__DIR__ . '/resources/' . $fileName);
    return count($lines) == 1 ? reset($lines) : $lines;
}


/**
 * Prints the given text in the specified color using ANSI escape sequences.
 *
 * @param string $text The text to be printed.
 * @param string $color The color name (e.g., "red", "green", "yellow", "blue").
 */
function logger($text, $color = 'white') {
    $color_codes = [
        "black" => 30,
        "red" => 31,
        "green" => 32,
        "yellow" => 33,
        "blue" => 34,
        "magenta" => 35,
        "cyan" => 36,
        "white" => 37,
    ];

    $color_code = $color_codes[strtolower($color)] ?? 37; 
    echo "\033[{$color_code}m{$text}\033[0m" . PHP_EOL;
}
