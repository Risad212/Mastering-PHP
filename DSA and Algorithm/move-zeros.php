<?php

// Algorithm: Move Zeros to End
// ---------------------------------
// Problem: Move all zeros to end keeping order
// Approach: Two Pointers (i and j)
// ---------------------------------
// Step 1: j starts at 0 (slow pointer)
// Step 2: i scans every element (fast pointer)
// Step 3: if arr[i] != 0 → swap arr[i] with arr[j] → j++
// Step 4: if arr[i] == 0 → skip → only i moves
// Step 5: repeat until i reaches end
// ---------------------------------

function moveZeros(array $arr): array {
    $j = 0;

    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] != 0) {
            $temp    = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
            $j++;
        }
    }

    return $arr;
}

// ---------------------------------
// Test Cases
// ---------------------------------

// Case 1: zeros in middle
print_r(moveZeros([1, 2, 0, 3, 0, 4]));
// Output: [1, 2, 3, 4, 0, 0] ✅

// Case 2: zero at start
print_r(moveZeros([0, 1, 2, 3]));
// Output: [1, 2, 3, 0] ✅

// Case 3: zero at end (already correct)
print_r(moveZeros([1, 2, 3, 0]));
// Output: [1, 2, 3, 0] ✅

// Case 4: all zeros
print_r(moveZeros([0, 0, 0]));
// Output: [0, 0, 0] ✅

// Case 5: no zeros
print_r(moveZeros([1, 2, 3, 4]));
// Output: [1, 2, 3, 4] ✅

// Case 6: empty array
print_r(moveZeros([]));
// Output: [] ✅

// Case 7: one element zero
print_r(moveZeros([0]));
// Output: [0] ✅

// Case 8: one element non-zero
print_r(moveZeros([5]));
// Output: [5] ✅
