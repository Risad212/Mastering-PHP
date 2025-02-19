<?php
$n = 5; // Number of rows

echo "<pre>"; // Preserve spacing in the browser
for ($i = 1; $i <= $n; $i++) {
    // Print spaces
    for ($j = 1; $j <= $n - $i; $j++) {
        echo " ";
    }

    // Print stars
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }

    echo "<br>"; // Move to the next line
}
echo "</pre>"; // Close preformatted block
