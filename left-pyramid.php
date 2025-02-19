<?php
// learn how to print any anything in left align pyramid

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo "</br>";
}


// in outer loop run then increase the value and inner loop will start to run from 1 to lange of outer loop value;


// if will reverse it? then logic just reverse outter loop will start from n and will be run for length of 1

for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo "</br>";
}
