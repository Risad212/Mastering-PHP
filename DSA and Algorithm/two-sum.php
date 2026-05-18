<?php

function twoSum( $arr, $target ){
$first = 0;
$end   = count($arr) - 1;

while( $end > $first ){
    $sum = $arr[$first] + $arr[$end];
    if( $sum == $target ){
         return [$arr[$first], $arr[$end]];
    }else if( $sum > $target ){
        $end--;
    }
    else if( $sum < $target ){
        $first++;
    }
}
 return 'not found';
}
print_r(twoSum([1,2,3,4,5,6,7,8], 7)); // sorted;
