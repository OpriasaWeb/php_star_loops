<?php
// Right triangle loop

$size = 5;

echo "Right triangle star";
echo "<br>";

for($i = 0; $i < $size; $i++){

  // printing the space
  for($j = 0; $j < $size - $i; $j++){
    echo "&nbsp;&nbsp;";
  }

  // printing the star
  for($k = 0; $k <= $i; $k++){
    echo "*";
  }

  echo "<br>";

}



?>