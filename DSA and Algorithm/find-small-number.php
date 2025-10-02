<?php
// PHP script to find the smalles number in an array

$arr = [15, 2, 4, 7, 9, 25, -1];
$temp = $arr[0];

// Loop through the array
for ($i = 0; $i < count($arr); $i++) {
    // If current element is smaller than temp, update temp
    if ($arr[$i] < $temp) {
        $temp = $arr[$i];
    }
}

// Print the smalles number after the loop
echo "The smalles number is: " . $temp;
?>
