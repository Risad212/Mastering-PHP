<?php

function arr_sum($arr){
  if (!is_array($arr)) return 0;

  $sum = 0;

  foreach($arr as $value){
    if (is_numeric($value)) {
      $sum += $value;
    }
  }

  echo $sum. ' ';
}

arr_sum([1,2,3]);          // 6 ✅
arr_sum([-1,-2,-3]);       // -6 ✅
arr_sum([10, -5, 5]);      // 10 ✅

arr_sum([1,[2,3]]);     // 1 ✅
arr_sum("123");         // 0 ✅
arr_sum([1,true,null]); // 1 ✅
