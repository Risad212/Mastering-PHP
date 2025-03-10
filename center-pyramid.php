<?php
$n = 5; // Number of rows

echo "<pre>";
// Print the pyramid
for ($i = 1; $i <= $n; $i++) {
    // Print leading spaces to center the pyramid
    for ($j = 1; $j <= $n - $i; $j++) {
        echo "&nbsp;"; // Space for the left part of the pyramid
    }

    // Print stars for the pyramid
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }

    // Move to the next line after printing stars
    echo "<br>";
}

echo "</pre>";
