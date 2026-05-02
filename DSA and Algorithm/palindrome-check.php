<?php

// 🔥 This covers:
// basic words
// numbers
// empty string
// long strings
// spaces
// Bangla
// emoji
// edge cases

function is_palindrome($string) {
    $length = mb_strlen($string);
    $result = '';
    
    for ($i = $length - 1; $i >= 0; $i--) {
        $result .= mb_substr($string, $i, 1);
    }

    if( $result == $string ){
      return $result;
    }else{
        return 'not match';
    }
}

echo is_palindrome('madam');      // true
echo "\n";

echo is_palindrome('hello');      // false
echo "\n";

echo is_palindrome('level');      // true
echo "\n";

echo is_palindrome('racecar');    // true
echo "\n";

echo is_palindrome('php');        // false
echo "\n";

echo is_palindrome('a');          // true
echo "\n";

echo is_palindrome('');           // true
echo "\n";

echo is_palindrome('1221');       // true
echo "\n";

echo is_palindrome('1234');       // false
echo "\n";

echo is_palindrome('madamimadam'); // true
echo "\n";

echo is_palindrome('madam im adam'); // false (space matters)
echo "\n";

echo is_palindrome('বাংলা');       // false
echo "\n";

echo is_palindrome('😊👍😊');      // true
echo "\n";

echo is_palindrome('😊👍');       // false
