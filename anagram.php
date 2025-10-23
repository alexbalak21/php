<?php
function anagram($str1, $str2)
{

    $arr1 = str_split(strtolower($str1));
    sort($arr1);
    $arr2 = str_split(strtolower($str2));
    sort($arr2);

    return $arr1 === $arr2;
}


echo anagram("The eyes", "They see") ? "True" : "False";
