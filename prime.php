<?php
function is_prime($n): bool
{
    if ($n === 1 || $n === 2) return true;
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i === 0) return false;
    }
    return true;
}

function siv($n): bool
{
    if ($n < 2) return false;

    for ($i = 2; $i * $i <= $n; $i++) {
        if ($n % $i === 0) return false;
    }

    return true;
}



echo siv(9999999967) ? 'True' : "False";
