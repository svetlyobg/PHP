<?php
#https://www.youtube.com/watch?v=y6-6M0mGfxY
    echo 1 == True;
    echo "<br/> \n";echo "<br/> \n";
    echo !(1 == True);
    echo "<br/> \n";echo "<br/> \n";
    $condition = 5 > 3;
    echo $condition ? "истина": "лъжа";
    echo "<br/> \n";echo "<br/> \n";
    $town = "Gabrovo";
    $distance = 340;
    $condition2 = ($town == "Gabrovo") &&($distance<400);
    echo $condition2 ? "да": "не";

      echo "<br/> \n";echo "<br/> \n";
      $town2 = "Gabrovo";
      $distance = 340;
      if (($town == "Gabrovo") &&($distance<400)){
      echo "Ще пътувам за $town2";
    } else if ($distance > 500) {
      echo "Твърде далеко не мога да пътувам";
    }
      else {
      echo "Няма да пътувам за $town2";
      endf;
    }



 ?>
