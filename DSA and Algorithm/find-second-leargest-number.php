<?php

function findLeargeNum( $arr ){
  $lgNum = $arr[0]; // 7
  $secondNum = $arr[1]; // 5
  
  foreach($arr as $item ){ // item 1
      if( $item > $lgNum ){
          $secondNum = $lgNum;
          $item = $lgNum;
       }else if($lgNum > $item && $secondNum < $item){
          $secondNum = $item;
      }
  }
  return $secondNum;
}
echo findLeargeNum([7,3,4,5,1]);
