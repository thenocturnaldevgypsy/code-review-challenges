<?php

/*
 * By adding type hints and enabling strict type checking, code can become
 * easier to read, self-documenting, and reduce the number of potential bugs.
 * By default, type declarations are non-strict, which means they will attempt
 * to change the original type to match the type specified by the
 * type-declaration.
 *
 * In other words, if you pass a string to a function requiring a float,
 * it will attempt to convert the string value to a float.
 *
 * To enable strict mode, a single declare directive must be placed at the top
 * of the file.
 * This means that the strictness of typing is configured on a per-file basis.
 * This directive not only affects the type declarations of parameters, but also
 * a function's return type.
 *
 * For more info review the Concept on strict type checking in the PHP track
 * <link>.
 *
 * To disable strict typing, comment out the directive below.
 */

declare(strict_types=1);

/**
 * Calculate the Hamming distance between two DNA strands.
 *
 * The Hamming distance is only defined for sequences of equal length.
 * If the sequences differ in length, an InvalidArgumentException is thrown.
 *
 * @param string $strandA The first DNA strand.
 * @param string $strandB The second DNA strand.
 *
 * @return int The Hamming distance between the two strands.
 *
 * @throws InvalidArgumentException If the strands are of unequal length.
 */
function distance(string $strandA, string $strandB): int
{
    // Check if the strands are of equal length
    if (strlen($strandA) !== strlen($strandB)) {
        // Adjusted exception message to match test requirements (lowercase)
        throw new InvalidArgumentException('strands must be of equal length');
    }

    // Initialize the Hamming distance counter
    $hammingDistance = 0;

    // Iterate through the strands and compare each character
    for ($i = 0; $i < strlen($strandA); $i++) {
        if ($strandA[$i] !== $strandB[$i]) {
            $hammingDistance++; // Increment counter if characters differ
        }
    }

    // Return the computed Hamming distance
    return $hammingDistance;
}
?>