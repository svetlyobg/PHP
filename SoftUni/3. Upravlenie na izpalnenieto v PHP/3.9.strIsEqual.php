<?php
#echo "<br>\n";

function strIsEqual ($str1,$str2,$ignoreCase = true)
{
  if ($ignoreCase)
    return strtolower ($str1) == strtolower($str2);
  else
    return $str1 == $str2;
}

echo strIsEqual("hello", "HeLLo", TRUE); echo "<br>\n";
echo strIsEqual("hello", "HELLO"); echo "<br>\n";
echo strIsEqual("hello", "Hello", false);echo "<br>\n";

 ?>
