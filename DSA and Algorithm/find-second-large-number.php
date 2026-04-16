<?php

function findSecondLargest($arr) {
    if (count($arr) < 2) return null;

    $largest = null;
    $second = null;

    foreach ($arr as $num) {

        if ($largest === null || $num > $largest) {
            $second = $largest; // shift old largest
            $largest = $num;

        } elseif ($num !== $largest && ($second === null || $num > $second)) {
            $second = $num;
        }
    }

    return $second. ' ';
}

// Basic
echo findSecondLargest([3,4,5,6]); // 5
echo findSecondLargest([10,8,9]); // 9

// Negative
echo findSecondLargest([-2, -10, -5]); // -5

// Duplicates
echo findSecondLargest([1,1,2,3,4,5,2,5,5,3]); // 4

// All same
echo findSecondLargest([5,5,5,5]); // null

// Two elements
echo findSecondLargest([10,5]); // 5
echo findSecondLargest([5,10]); // 5

// Edge cases
echo findSecondLargest([1]); // null
echo findSecondLargest([]); // null

// Mixed
echo findSecondLargest([7,7,7,6,6,5]); // 6
echo findSecondLargest([100,1,2,3]); // 3
echo findSecondLargest([1,2,3,100]); // 3
