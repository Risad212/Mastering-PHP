<?php

function findLargeNum($arr) {
    $first  = PHP_INT_MIN;
    $second = PHP_INT_MIN;

    foreach($arr as $num){
        if($num > $first){
            $second = $first;
            $first  = $num;
        } else if($num > $second){
            $second = $num;
        }
    }
    return $second;
}

echo findLargeNum([7,3,4,5,1]);   // 5 ✅
echo findLargeNum([-1,-2,-3,-4]); // -2 ✅
echo findLargeNum([4,3,2,1]);     // 3 ✅
