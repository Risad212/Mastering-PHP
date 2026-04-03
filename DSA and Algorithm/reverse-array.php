$arr = [10, 5, 20, 15];
$n = count($arr);

for($i = 0; $i < $n; $i++){
    for($j = $i + 1; $j < $n; $j++){
        if($arr[$i] < $arr[$j]){
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
        }
    }
}

print_r($arr);
