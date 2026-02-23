<?php

$arr = [3,6,1,3,4];
$largeNum = $arr[0];
$secondLargeNum = $arr[0];

for( $i = 0; $i<count($arr); $i++ ){
    if ( $arr[$i] > $largeNum ){
        $secondLargeNum = $largeNum;
        $largeNum = $arr[$i];
    }else if( $arr[$i] > $secondLargeNum && $arr[$i] < $largeNum ){
        $secondLargeNum = $arr[$i];
    }
}

echo $secondLargeNum;
