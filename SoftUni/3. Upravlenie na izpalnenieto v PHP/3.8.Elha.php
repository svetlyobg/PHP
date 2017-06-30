<?php

for ($i=1; $i < 10; $i+=2)
{
    drawSegment(10,$i);
}

function drawSegment($size, $line)
{
  for ($i=0; $i < ($size - $line)/2; $i++)
  {
    echo " ";
  }
    for ($i=0; $i < $line; $i++)
    {
        echo "*";
    }
    echo "<br>\n";
}

 ?>
