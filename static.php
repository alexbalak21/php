<?php
function increment()
{
    static $counter = 0;
    $counter++;
    return $counter;
}


echo "Count: " . increment(), "<br>";
echo "Count: " . increment(), "<br>";
echo "Count: " . increment(), "<br>";
echo "Count: " . increment(), "<br>";
echo "Count: " . increment(), "<br>";
echo "Count: " . increment(), "<br>";
echo "Count: " . increment(), "<br>";
echo "Count: " . increment(), "<br>";
echo "Count: " . increment(), "<br>";
echo "Count: " . increment(), "<br>";
