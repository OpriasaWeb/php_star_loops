<?php

// Hollow triangle

$size = 10;

echo "Hollow triangle";
echo "<br>";

// print rows
for($i = 0; $i <= $size; $i++){

  // print columns
  for($j = 0; $j < $i; $j++){

    // not last row
    if($i != $size){
      // if the iteration is 0 and last, print star
      if($j == 0 || $j == $i - 1){
        echo "*";
      } else{
        // otherwise, print space only
        echo "&nbsp;&nbsp;";
      }
    }else{
      echo "*";
    }
    
  }

  echo "<br>";
}



?>