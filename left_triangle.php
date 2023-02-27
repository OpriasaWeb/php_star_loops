<?php
// Left triangle pattern


$star = 5;

echo "Left triangle star";
echo "<br>";

for($i = 0; $i < $star; $i++){
  // print column
  for($j = 0; $j <= $i; $j++){
    echo "*";
  }
  echo "<br>";
}





?>