<?php
function maxSum(array $arr, int $numSum){
    $maxSum = 0;
    for($i = 0; $i <= count($arr) - $numSum ; $i++){
        $num = $arr[$i];
        $next = $arr[$i + 1];
        $nextTo = $arr[$i + 2];
        $sum = $num + $next + $nextTo;
        
        if( $sum > $maxSum ){
            $maxSum = $sum;
        }
    }
    return $maxSum;
}
echo maxSum([1, 3, 2, 5, 4], 3);
