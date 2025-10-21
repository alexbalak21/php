<?php
function Palindrome($string)
{
    // Remove spaces and convert to lowercase
    $cleanedString = strtolower(str_replace(' ', '', $string));

    $reversedString = strrev($cleanedString);

    return $cleanedString === $reversedString;
}


echo Palindrome("A man a plan a canal Panama") ? "Palindrome" : "Not a Palindrome";
echo "<br>";
echo Palindrome("Hello World") ? "Palindrome" : "Not a Palindrome";
