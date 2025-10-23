<?php
function reverse($string)
{
    $array_string = str_split($string);
    $reversed_array = array_reverse($array_string);
    $reversed_string = implode($reversed_array);
    return $reversed_string;
}

function reverse_simple($string)
{
    return strrev($string);
}


echo reverse("Hello World");
echo "<br>";
echo reverse_simple("Hello World");
