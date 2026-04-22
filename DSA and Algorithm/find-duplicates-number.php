<?php

// brute force approce
$arr = [1, 2, 3, 3, 4, 2, 1];
$duplicates = []; 

for ($i = 0; $i < count($arr); $i++) {
    for ($j = $i + 1; $j < count($arr); $j++) {
       if ($arr[$i] == $arr[$j]) {
            $duplicates[] = $arr[$i];
        }
    }
}

print_r($duplicates);

// O(n) performance
function findDuplicateNumber($arr) {

    $seen = [];
    $duplicate = [];

    for ($i = 0; $i < count($arr); $i++) {

        $val = $arr[$i];

        // if already seen before
        if (isset($seen[$val])) {

            // only add once to duplicate list
            if (!in_array($val, $duplicate)) {
                $duplicate[] = $val;
            }

        } else {
            $seen[$val] = true;
        }
    }

    return $duplicate;
}

// 🧪 TEST CASES

print_r(findDuplicateNumber([])); // []

print_r(findDuplicateNumber([1,4,5,3,73,2,3,3])); // [3]

print_r(findDuplicateNumber([-1,-2,-1, -10, -3])); // [-1]

print_r(findDuplicateNumber([null, null])); // []

print_r(findDuplicateNumber([2,2,2,2])); // [2]

print_r(findDuplicateNumber([1,2,3,4,5])); // []

print_r(findDuplicateNumber([0, "0", 0])); // [0]

print_r(findDuplicateNumber([true, 1, true])); // [1]
