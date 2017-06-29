<?php

$name = "pesho";
switch ($name) {
  case 'gosho':
    echo "Gosho found";
    break;
  case 'pesho':
      echo "Pesho found";
      break;
  case 'maria':
        echo "maria found";
        break;

  default:
    echo "Nobody found";
        break;
}
echo "<br/> \n";
$day="Friday";
switch ($day) {
  case 'Monday':
  case 'Tuesday':
  case 'Wednesday':
  case 'Thursday':
  case 'Friday':
    echo "Working day";
    break;

  default:
    echo "Non-working day";
    break;
}
 ?>
