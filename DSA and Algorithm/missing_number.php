<?php

function missingNumber(array $arr): int {
    // Step 1 - find n
    $n = count($arr) + 1;
    
    // Step 2 - expected sum
    $expectedSum = $n * ($n + 1) / 2;
    
    // Step 3 - actual sum manually
    $actualSum = 0;
    foreach ($arr as $num) {
        $actualSum += $num;
    }
    
    // Step 4 - find missing
    return $expectedSum - $actualSum;
}
echo missingNumber([1,2,4,5,6]); // Output: 3
