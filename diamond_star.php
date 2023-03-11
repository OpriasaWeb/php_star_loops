<?php

// Diamond star PHP
echo "Diamond star";
echo "<br>";
echo "<br>";

$size = 5;

// upside pyramid
for($i = 1; $i < $size; $i++){

  // print spaces
  // first iteration, j is 5 and 5 is gt 1 so do the space, decrement
  // second iteration, j is 4 and 4 is gt 1 so do the space, decrement
  // third iteration, j is 3 and 3 is gt 1 so do the space, decrement
  // fourth iteration, j is 2 and 2 is gt 1 so do the space, decrement
  // fifth iteration, j is 1 and 1 is  not gt 1 the loop stops
  for($j = $size; $j > $i; $j--){
    echo "&nbsp;&nbsp;";
  }

  // and go to the next inner loop
  // print star
  // k is 0 and 0 is lt 1 * 2 - 1 = 1 so print star, increment
  // k is 1 and 1 is not lt 1 * 2 - 1 = 1 so loop stops
  for($k = 0; $k < $i * 2 - 1; $k++){
    echo "*";
  }

  // print next line
  echo "<br>";

}

// downside pyramid
for($i = 1; $i <= $size - 1; $i++){
  
  // first iteration, j is 0 and 0 is lt 1 so print the space, increment
  // first iteration, j is 1 and 1 is not lt 1 so loop stops
  // print spaces
  for($j = 0; $j < $i; $j++){
    echo "&nbsp;&nbsp;";
  }

  // and go to the next inner loop
  // first iteration, k is 5 - 1 = 4 * 2 = 8 - 1 = 7 is gt 0 so print the star, decrement
  // second iteration, k is 5 - 1 = 4 * 2 = 8 - 1 = 6 is gt 0 so print the star, decrement
  // first iteration, k is 5 - 1 = 4 * 2 = 8 - 1 = 5 is gt 0 so print the star, decrement
  // first iteration, k is 5 - 1 = 4 * 2 = 8 - 1 = 4 is gt 0 so print the star, decrement
  // first iteration, k is 5 - 1 = 4 * 2 = 8 - 1 = 3 is gt 0 so print the star, decrement
  // first iteration, k is 5 - 1 = 4 * 2 = 8 - 1 = 2 is gt 0 so print the star, decrement
  // first iteration, k is 5 - 1 = 4 * 2 = 8 - 1 = 1 is gt 0 so print the star, decrement
  // first iteration, k is 5 - 1 = 4 * 2 = 8 - 1 = 0 is not gt 0 so the loops stops and go back to the outer loop for the next iteration of it
  // print star
  for($k = ($size - $i) * 2 - 1; $k > 0; $k--){
    echo "*";
  }

  // print next line
  echo "<br>";
}

?>