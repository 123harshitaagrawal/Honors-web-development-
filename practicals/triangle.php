<?php
// Function to generate an inverted triangle pattern
function invertedTriangle($rows) {
    for ($i = $rows; $i >= 1; $i--) {
        // Print spaces before the asterisks
        for ($j = $rows - $i; $j > 0; $j--) {
            echo " ";
        }

        // Print asterisks
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
            if ($k < 2 * $i - 1) {
                echo " ";
            }
        }

        // Move to the next line
        echo "\n";
    }
}

// Number of rows in the inverted triangle
$rows = 5;

// Generate the inverted triangle
invertedTriangle($rows);
?>


