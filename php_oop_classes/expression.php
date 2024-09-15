<?php
function isValid($s) {
    $stack = [];
    $mapping = [
        ")" => "(",
        "}" => "{",
        "]" => "["
    ];

    foreach (str_split($s) as $char) {
        if (array_key_exists($char, $mapping)) {
            $top_element = array_pop($stack) ?: '#';
            if ($mapping[$char] !== $top_element) {
                return false;
            }
        } else {
            array_push($stack, $char);
        }
    }

    return empty($stack);
}

// Test cases
var_dump(isValid("()[]{}"));  // Output: true
var_dump(isValid("([)]"));    // Output: false
?>
