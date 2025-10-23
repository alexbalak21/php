<?php
function clear_duplication($array)
{
    return array_unique($array);
}


$array = [1, 2, 2, 3, 4, 4, 5, 6, 6, 7, 8, 8, 9];
$cleared_array = clear_duplication($array);
echo '[';
foreach ($cleared_array as $value) {
    echo $value;
    if ($value !== end($cleared_array)) {
        echo ', ';
    }
}
echo ']';
