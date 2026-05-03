<?php

// String Palindrome Checker (Case Insensitive)

function is_palindrome($string) {
     // conver to lowercase
    $string = mb_strtolower($string);

    $length = mb_strlen($string);
    $result = '';

    // reverse string
    for ($i = $length - 1; $i >= 0; $i--) {
        $result .= mb_substr($string, $i, 1);
    }

    return $result === $string;
}

// Basic
echo is_palindrome('madam') ? 'true' : 'false'; echo "\n";
echo is_palindrome('racecar') ? 'true' : 'false'; echo "\n";
echo is_palindrome('hello') ? 'true' : 'false'; echo "\n";

// Case insensitive
echo is_palindrome('Madam') ? 'true' : 'false'; echo "\n";
echo is_palindrome('RaceCar') ? 'true' : 'false'; echo "\n";

// Numbers
echo is_palindrome('121') ? 'true' : 'false'; echo "\n";
echo is_palindrome('123') ? 'true' : 'false'; echo "\n";

// Empty & single
echo is_palindrome('') ? 'true' : 'false'; echo "\n";
echo is_palindrome('a') ? 'true' : 'false'; echo "\n";

// Mixed
echo is_palindrome('abccba') ? 'true' : 'false'; echo "\n";
echo is_palindrome('abc123') ? 'true' : 'false'; echo "\n";

// Unicode
echo is_palindrome('মাম') ? 'true' : 'false'; echo "\n";

// Emoji
echo is_palindrome('🙂🙂') ? 'true' : 'false'; echo "\n";

?>
