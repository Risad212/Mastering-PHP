<?php

$string = 'hello';
$arr    = str_split($string);
$start  = 0;
$end    = count($arr) - 1;

while($start < $end){
    $temp        = $arr[$start];
    $arr[$start] = $arr[$end];
    $arr[$end]   = $temp;

    $start++;
    $end--;
}

echo implode($arr); // "olleh" ✅

