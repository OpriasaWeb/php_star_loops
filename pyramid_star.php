<!-- Pyramid STAR - PHP loop and condition -->

<?php

$size = 5;

// title
echo "Pyramid star using PHP for loop and conditionals";
echo "<br>";
echo "<br>";

// set outer loop
for($i = 0; $i < $size; $i++){
    // first inner loop to print spaces
    for($j = 0; $j < $size - $i - 1; $j++){
        echo "&nbsp;&nbsp;";
    }

    // second inner loop to print stars
    for($k = 0; $k < 2 * $i + 1; $k++){
        echo "*";
    }

    // last, break <br>
    echo "<br>";
}




?>