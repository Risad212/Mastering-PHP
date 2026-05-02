<?php

function reverse_string($string) {
    $length = mb_strlen($string);
    $result = '';

    for ($i = $length - 1; $i >= 0; $i--) {
        $result .= mb_substr($string, $i, 1);
    }

    return $result;
}

// Basic
echo reverse_string('hello');        // olleh
echo "\n";
echo reverse_string('world');        // dlrow
echo "\n";
echo reverse_string('PHP');          // PHP
echo "\n";

// Empty & single
echo reverse_string('');             // ''
echo "\n";
echo reverse_string('A');            // A
echo "\n";
echo reverse_string('🙂');           // 🙂
echo "\n";

// Numbers
echo reverse_string('12345');        // 54321
echo "\n";
echo reverse_string('0001');         // 1000
echo "\n";

// Spaces
echo reverse_string('a b c');        // c b a
echo "\n";
echo reverse_string(' hello ');      // ' olleh '
echo "\n";
echo reverse_string('   ');          // '   '
echo "\n";

// Mixed
echo reverse_string('abc123');       // 321cba
echo "\n";
echo reverse_string('a1b2c3');       // 3c2b1a
echo "\n";
echo reverse_string('!@#123abc');    // cba321#@!
echo "\n";

// Case
echo reverse_string('AbCdEf');       // fEdCbA
echo "\n";

// Unicode
echo reverse_string('বাংলা');        // correct reverse
echo "\n";
echo reverse_string('日本語');       // correct reverse
echo "\n";
echo reverse_string('مرحبا');       // correct reverse
echo "\n";

// Emoji
echo reverse_string('😊👍');         // 👍😊
echo "\n";
echo reverse_string('🔥💧🌍');      // 🌍💧🔥
echo "\n";

// Combining character
echo reverse_string("é");           // may look odd depending on rendering
echo "\n";

// New lines & tabs
echo reverse_string("hello\nworld"); // dlrow\nolleh
echo "\n";
echo reverse_string("a\tb\tc");      // c\tb\ta
echo "\n";

// HTML-like
echo reverse_string('<h1>Hello</h1>'); // >1h/<olleH>1h<
echo "\n";

// Symbols
echo reverse_string('$%^&*()');      // )(*&^%$
echo "\n";

// Long string
echo reverse_string(str_repeat('a', 10)); // aaaaaaaaaa
echo "\n";
