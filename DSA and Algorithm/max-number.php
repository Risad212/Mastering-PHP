<?php

function findLargestNumber( $arr ){
     if (empty($arr)) {
        echo "Array is empty";
        return;
    }
    
  $largestNumber = $arr[0];
  for( $i = 0; $i<count($arr); $i++ ){
      if( $arr[$i] > $largestNumber ){
          $largestNumber = $arr[$i];
      }
  }
  echo $largestNumber. ' ';
}

findLargestNumber([-10, -50, -1, -30, -40]); // -1 ✅
findLargestNumber([1, 2, 3, 4, 5]);          // 5 ✅
findLargestNumber([5, 5, 5, 5]);             // 5 ✅
findLargestNumber([100]);                   // 100 ✅
findLargestNumber([-1]);                    // -1 ✅
findLargestNumber([]);                      // Array is empty ✅
findLargestNumber([0, -1, -2, -3]);         // 0 ✅
