<?php

$row = 4;
$column = 5;

// outer loop - row
for($i = 0; $i < $row; $i++){
  // print the column
  // inner loop - column
  for($j = 0; $j < $column; $j++){
    if($i === 0 || $i === $row - 1){
      echo "*";
    } else{
      if($j === 0 || $j === $column - 1){
        echo "*";
      } else{
        // use &nbsp; for space
        echo "&nbsp;&nbsp;";
      }
    }
  }
  echo "<br>";


  
}



?>