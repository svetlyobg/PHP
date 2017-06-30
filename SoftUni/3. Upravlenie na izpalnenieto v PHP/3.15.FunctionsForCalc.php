<?php

function sum($a, $b)
{
    return $a + $b;
}
function multi($a,$b)
{
    return $a * $b;
}

$a = 5;
$b = 3;

if ($a < 5) {
    $func = "multi";
} else {
    $func = "sum";
}

$sum = $func($a, $b);
echo "$a and $b = $sum <br/>";

 ?>
