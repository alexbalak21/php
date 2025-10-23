<?php
function addition($max)
{
    $total = 0;
    for ($i = 1; $i <= $max; $i++) {
        $total += $i;
    }
    return $total;
}

echo addition(100);
echo "<br>";
echo (100 * (100 + 1)) / 2;
