<?php

function mostFrequent(array $arr) {
  $seen = [];
  $storeCount = 0;
  $result = null;
 foreach( $arr as $num ){
    if( isset( $seen[$num] ) ){
        $seen[$num]++;
    }else{
      $seen[$num] = 1;
    }
  }
  
  foreach ($seen as $num => $count) {
     if( $count > $storeCount ){
         $storeCount = $count;
         $result = "$num is learge $count time";
     }
  }
  return $result;
}
print_r( mostFrequent( [5, 1, 5, 2, 5, 3] ) );
