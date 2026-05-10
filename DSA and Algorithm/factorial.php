<?php

function factorial(int $n): int {
    if($n === 1) return 1;
    return $n * factorial($n - 1);
}

echo factorial(5); // 120 ✅
