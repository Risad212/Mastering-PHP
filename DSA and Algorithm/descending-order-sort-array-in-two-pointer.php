<?php

$arr = [5,4,3,2,1];

$start = 0;
$end = count($arr) - 1;

$temp = 0;

while( $end >= $start ){
    $temp = $arr[$start];
    $arr[$start] = $arr[$end];
    $arr[$end] = $temp;
    $start++;
    $end--;
}

print_r($arr);
