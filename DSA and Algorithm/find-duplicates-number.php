<?php
$arr = [1, 2, 3, 1, 2, 4, 5,5,6];

$unique = [];
$count = []; // associative array to track number

foreach($arr as $num){
    if(!isset($count[$num])){
        $count[$num] = true;
        $unique[] = $num;
    }
}
print_r($unique);
?>