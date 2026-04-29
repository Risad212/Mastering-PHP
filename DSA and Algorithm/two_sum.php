<?php
function two_sum( $arr, $target ){
  if( !$arr || !$target ){ return;}
  
  $result = array();
  $seen = array();
  $useKey = array();
  
  foreach( $arr as $num ){
      $need = $target - $num;
     if( isset( $seen[$need] ) ){
         
         // pair order
         if( $num < $need ){
             $pair = [$num, $need];
         }else{
             $pair = [$need, $num];
         }
         
         // key define
         $key = $pair[0]. ',' .$pair[1];
         
         if(!isset($useKey[$key])){
             $result[] = $pair;
             $useKey[$key] = true;
         }
         
     }
     $seen[ $num ] = true;
  }
  return $result;
}

print_r(two_sum([2, 7, 11, 15], 9)); 
// [[2,7]]

print_r(two_sum([1, 2, 3, 4, 5, 6], 7)); 
// [[1,6],[2,5],[3,4]]

print_r(two_sum([-1, -2, -3, -4, -5], -6)); 
// [[-5,-1],[-4,-2]]

print_r(two_sum([-10, -3, 1, 4, 7, 13], 4)); 
// [[-3,7]]

print_r(two_sum([-2, -1, 0, 1, 2], 0)); 
// [[-2,2],[-1,1]]

print_r(two_sum([0, 0, 0, 0], 0)); 
// [[0,0]]

print_r(two_sum([1, 2, 3, 9], 20)); 
// []

print_r(two_sum([3, 3, 3, 3, 4, 4, 5, 5], 8)); 
// [[3,5],[4,4]]

print_r(two_sum([6, 6, 6, 6], 12)); 
// [[6,6]]

print_r(two_sum([10, -5, -2, -3, 7], -7)); 
// [[-5,-2]]

print_r(two_sum([1000000, 500000, -500000, 2000000], 500000)); 
// [[-500000,1000000]]

print_r(two_sum([5], 10)); 
// []

print_r(two_sum([], 10)); 
// []

print_r(two_sum([1, 2, 3, 4], null)); 
// []   (invalid target case)

print_r(two_sum([8, -1, 5, 1, 5, 0, -8, 9], 7)); 
// [[-1,8]]



