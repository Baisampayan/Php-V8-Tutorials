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
echo '<br>';

// Break
$a = 1;
$i = 1;
while($a <= 10) {
    echo 'a = ' . $a . ', ';
    while($a < 8) {
        if($a == 5){
            break;
        }
        echo '<br>Inside the Second While Loop = ' . $a;
        $a++;
    }
    $a++;
    echo '<br>';
}
echo '<br>';

// Nested Break
$a = 1;
$i = 1;
while($a < 10) {
    echo 'a = ' . $a . ', ';
    $a++;
    while($i < 5) {
        echo '<br>Inside the Second While Loop: ' . $a;
        $i++;
        break 2;
    }
    echo '<br>';
}

// Continue
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x <br>";
}