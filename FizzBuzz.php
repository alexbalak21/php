<?php
function FizzBuzz($number)
{
    $result = "";
    if ($number % 3 === 0) {
        $result .= "Fizz";
    }
    if ($number % 5 === 0) {
        $result .= "Buzz";
    }
    return $result;
}


for ($i = 1; $i <= 100; $i++) {
    echo $i, ' : ',  FizzBuzz($i) . "<br>";
}
