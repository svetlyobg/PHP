<?php
#echo "<br>\n";

function calcSum()
{
  $sum = 0;
  foreach (func_get_args() as $arg)
  {
    $sum += $arg;
  }
  return $sum;
  }

echo calcSum (1,2), '<br />';
echo calcSum (10,20,30), '<br />';
echo calcSum (10,22,0.5, 0.75, 12.50), '<br />';

 ?>
