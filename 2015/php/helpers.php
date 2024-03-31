<?php

/**
 * Grabs and returns the contents of a file.
 *
 * @param  mixed $fileName
 * @return string
 */
function contents(string $fileName): string 
{
    return file_get_contents(__DIR__ . '/resources/' . $fileName);
}