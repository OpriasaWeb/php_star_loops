<!-- Reverse pyramid star pattern -->

<?php

$size = 5;

// set title
echo "Reverse pyramid star using PHP for loop and conditionals";
echo "<br>";
echo "<br>";

// set outer loop
for($i = 0; $i < $size; $i++){
    // first inner loop to print spaces 
    for($j = 0; $j < $i; $j++){
        echo "&nbsp;&nbsp;";
    }

    // second inner loop to print star
    for($k = 0; $k < 2 * ($size - $i) - 1; $k++){
        echo "*";
    }

    // print break <br>
    echo "<br>";
}






?>