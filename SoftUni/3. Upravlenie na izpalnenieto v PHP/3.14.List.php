<?php

list($a, $b, $c) = array(1,2,3);
echo "$a $b $c <br/>";

#swapping values
$d = 5;
$e = 3;
list($d, $e) = array($e, $d);
echo "$d $e <br/>";

// same as
// $temp = d;
// $d = e;
// $e = d;

 ?>
