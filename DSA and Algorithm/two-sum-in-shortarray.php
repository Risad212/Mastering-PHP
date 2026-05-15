<?php

function findTarget($arr, $target) {
    $start = 0;
    $end = count($arr) - 1;

    for ($i = 0; $i < count($arr); $i++) {
        $sum = $arr[$start] + $arr[$end];

        if ($sum === $target) {
            return [$arr[$start], $arr[$end]];
        } elseif ($sum > $target) {
            $end--;
        } else {
            $start++;
        }
    }

    return "No pair found";
}

$arr = [1,2,3,4,5,6,7];

print_r(findTarget($arr, 9));
