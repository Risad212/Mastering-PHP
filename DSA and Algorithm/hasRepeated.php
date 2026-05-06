<?php
function hasRepeated(string $str) {
    $chars = str_split($str);
    $seen = [];
    
    foreach($chars as $char){
        if(isset($seen[$char])){
           return true;
        }else{
            $seen[$char] = true;
        }
    }
    
   return false;
}

var_dump( hasRepeated("hello") );
var_dump( hasRepeated("abcd") );
