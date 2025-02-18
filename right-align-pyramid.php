<?php

/**
 * This script generates a right-aligned pyramid (right triangle) of asterisks.
 * 
 * Logic:
 * - First, a square grid of size n x n is considered.
 * - The inner loop determines whether to print a space or an asterisk.
 * - If the column index ($j) is less than (n - row index), a space is printed.
 * - Otherwise, an asterisk is printed, forming a right-aligned pattern.
 */

$n = 10; // Number of rows for the pyramid

echo "<pre>"; // Preserve text formatting in HTML

// Outer loop controls the number of rows
for ($i = 1; $i <= $n; $i++) {

    // Inner loop controls the number of columns
    for ($j = 1; $j <= $n; $j++) {

        // Print spaces for alignment before the asterisks
        if ($j <= $n - $i) {
            echo " "; // Regular space for proper formatting in HTML
        } else {
            echo "*"; // Print the asterisk
        }
    }

    echo "<br>"; // Move to the next line
}

echo "</pre>"; // Close the preformatted text block
