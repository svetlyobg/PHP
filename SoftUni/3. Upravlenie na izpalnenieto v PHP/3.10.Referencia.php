<?php
#echo "<br>\n";

function chanheValue(&$arg)
{
  $arg += 100;
}

$num =2;
echo $num;
echo "<br>\n";
chanheValue($num);
echo $num;

 ?>
