<?php
function Palindrome_ai($string)
{
    // Remove spaces and convert to lowercase
    $cleanedString = strtolower(str_replace(' ', '', $string));

    // Get the length of the cleaned string
    $length = strlen($cleanedString);

    // Check for palindrome
    for ($i = 0; $i < $length / 2; $i++) {
        // Compare characters from start and end
        if ($cleanedString[$i] !== $cleanedString[$length - $i - 1]) {
            return false;
        }
    }
    return true;
}

function Palindrome($string)
{
    // Remove spaces and convert to lowercase
    $cleanedString = strtolower(str_replace(' ', '', $string));

    // Reverse the cleaned string
    $reversedString = strrev($cleanedString);

    // Check if the cleaned string is equal to its reverse
    return $cleanedString === $reversedString;
}


echo Palindrome_ai("A man a plan a canal Panama") ? "Palindrome" : "Not a Palindrome";
echo "<br>";
echo Palindrome("Hello World") ? "Palindrome" : "Not a Palindrome";
