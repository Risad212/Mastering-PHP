<?php

function sum($arr){
  $sum = 0;
  for($i = 0; $i < count($arr); $i++){
       $sum = $sum + $arr[$i];
  }
  echo $sum;
}
sum([1,2,3]);
