<?php

// While Loops
$i = 0;
while($i <= 15) {
    echo $i . '<br>';
    $i++;
}

// Do-While Loops
$i = 5;
do {
    echo $i . '<br>';
} while ($i < 4);

// For Loops
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

// Foreach Loops
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
}

// Break

// Continue
