<?php
//Array of numbers from 1 to n with one missing
//Explain every line
function missing_number($arr)
{
    $n = count($arr) + 1; // Get the total count of numbers including the missing one
    $total = $n * ($n + 1) / 2; // Calculate the expected total using the formula for the sum of the first n natural numbers
    $sum_of_array = array_sum($arr); // Calculate the actual sum of the array elements
    return $total - $sum_of_array;
}
