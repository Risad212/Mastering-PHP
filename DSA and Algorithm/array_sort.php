<?php

function array_sort($arr){
  $temp = null;

  for($i = 0; $i < count($arr) - 1;){
      if($arr[$i] > $arr[$i + 1]){
          $temp = $arr[$i];
          $arr[$i] = $arr[$i + 1];
          $arr[$i + 1] = $temp;
          
          $i = 0;
      } else{
          $i++;
      }
  }

  print_r($arr);
}
array_sort([5,4,3,2,1]);
