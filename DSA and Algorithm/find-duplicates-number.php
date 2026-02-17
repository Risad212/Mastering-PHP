<?php

$arr = [1, 2, 3, 3, 4, 2, 1];
$duplicates = []; 

for ($i = 0; $i < count($arr); $i++) {
    for ($j = $i + 1; $j < count($arr); $j++) {
       if ($arr[$i] == $arr[$j]) {
            $duplicates[] = $arr[$i];
        }
    }
}

print_r($duplicates);
