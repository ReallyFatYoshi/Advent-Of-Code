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