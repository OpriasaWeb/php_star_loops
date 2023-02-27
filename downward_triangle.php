<?php

// Downward triangle star

$size = 5;

echo "Downward triangle star";
echo "<br>";

for($i = 0; $i < $size; $i++){

  for($j = 0; $j < $size - $i; $j++){
    echo "*";
  }

  echo "<br>";

}



?>