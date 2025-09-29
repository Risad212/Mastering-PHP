<?php
// PHP script to find the largest number in an array

$arr = [15, 2, 4, 7, 9, 25];
$temp = 0;

// Loop through the array
for ($i = 0; $i < count($arr); $i++) {
    // If current element is bigger than temp, update temp
    if ($arr[$i] > $temp) {
        $temp = $arr[$i];
    }
}

// Print the largest number after the loop
echo "The largest number is: " . $temp;
?>
