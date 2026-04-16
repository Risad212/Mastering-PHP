<?php
// PHP script to find the largest number in an array

function FindLeargeNumber( $arr ){
  $LeargeNumber = $arr[0];
  for( $i = 0; $i<count($arr); $i++ ){
      if( $arr[$i] > $LgNumber ){
          $LgNumber = $arr[$i];
      }
  }
  echo $LeargeNumber;
}
FindLeargeNumber([2,35,6,7,3]);
