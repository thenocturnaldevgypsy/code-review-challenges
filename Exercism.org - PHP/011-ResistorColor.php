<?php

declare(strict_types=1);

/**
 * Get all resistor colors as an indexed array.
 *
 * @return array Returns an array of resistor colors in the order from 'black' to 'white'.
 */
function getAllColors(): array
{
    // This is an indexed array containing only the colors, not the key-value pairs
    return [
        'black',
        'brown',
        'red',
        'orange',
        'yellow',
        'green',
        'blue',
        'violet',
        'grey',
        'white',
    ];
}

/**
 * Get the numerical value associated with a color.
 *
 * @param string $color The color band whose numeric value is to be retrieved.
 * @return int The numeric value corresponding to the color.
 * @throws InvalidArgumentException If the provided color is not valid.
 */
function colorCode(string $color): int
{
    // Get all colors from the function defined above
    $colors = getAllColors();
    
    // Check if the provided color exists in the colors array, if not, throw an exception
    if (!in_array($color, $colors)) {
        throw new InvalidArgumentException("Invalid color: $color");
    }

    // Return the index of the color in the array, which corresponds to its numeric value
    return array_search($color, $colors);
}

?>