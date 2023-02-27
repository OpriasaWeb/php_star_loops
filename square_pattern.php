<?php

echo "Square pattern star loop";
echo "<br>";

$column = 6;
$row = 4;

// row
for($i = 0; $i < $column; $i++){
  echo "<br>";
  echo "*";
  // column
  for($j = 0; $j < $row; $j++){
    // print the row
    echo "*";
  }
  // 
  echo "<br>";
}


?>