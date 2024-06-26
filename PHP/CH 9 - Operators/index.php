<?php

// Arithmetic Operators (+. -, /. *. %, and **)
    $num1 = 10;
    $num2 = 25;

    # Addition Operators
    echo $num1 + $num2 . '<br>';

    # Subtraction Operators
    echo $num2 - $num1 . '<br>';

    # Multiplication Operators
    echo $num1 * $num2 . '<br>';

    # Division Operators
    echo $num2 / $num1 . '<br>';

    # Modulus Operators
    echo $num2 % $num1 . '<br>';

    # Exponentiation Operators
    echo $num1 ** $num1 . '<br><br>';

// Assignment Operators
    $num1 = 15;
    echo $num1 . '<br>';

    # Addition Assignment Operators
    echo ($num1 + $num2) . '<br>';
    echo ($num1 += $num2) . '<br>';

    # Subtraction Assignment Operators
    echo ($num1 - $num2) . '<br>';
    echo ($num1 -= $num2) . '<br>';

    # Multiplication Assignment Operators
    echo ($num1 * $num2) . '<br>';
    echo ($num1 *= $num2) . '<br>';

    # Division Assignment Operators
    echo ($num1 / $num2) . '<br>';
    echo ($num1 /= $num2) . '<br>';

    # Modulus Assignment Operators
    echo ($num2 % $num1) . '<br>';
    echo ($num2 %= $num1) . '<br><br>';

// Comparison Operators
    $num1 = 10;
    $num2 = 10;

    # Equal Operators
    if($num1 == $num2) {
        echo 'Equal' . '<br>';
    } else {
        echo 'Both the numbers are not equal.' . '<br>';
    }

    # Identical Operators
    $str1 = 'Hi';
    $str2 = 'Hi';
    if($str1 === $str2) {
        echo 'Identical' . '<br>';
    } else {
        echo 'Both the values are not Identical.' . '<br>';
    }

    # Not equal Operators
    $num2 = 15;
    if($num1 != $num2) {
        echo 'Both the numbers are not equal.' . '<br>';
    } else {
        echo 'Both the numbers are equal.' . '<br>';
    }

    # Not equal Operators
    if($num1 <> $num2) {
        echo 'Both the numbers are not equal.' . '<br>';
    } else {
        echo 'Both the numbers are equal.' . '<br>';
    }

    # Not Identical Operators
    $str1 = 'Hi';
    $str2 = 'hi';
    if($str1 !== $str2) {
        echo 'Both the values are not Identical.' . '<br>';
    } else {
        echo 'Both the values are Identical.' . '<br>';
    }

    # Greater than Operators
    if($num1 > $num2) {
        echo 'First Number is greater than Second Number.' . '<br>';
    } else {
        echo 'Second Number is greater than First Number.' . '<br>';
    }

    # Less than Operators
    if($num1 < $num2) {
        echo 'First Number is Less than Second Number.' . '<br>';
    } else {
        echo 'Second Number is greater than First Number.' . '<br>';
    }

    # Greater than or equal to Operator
    if($num1 >= 25) {
        echo 'First Number is greater than or equal to Second Number.' . '<br>';
    } elseif($num2 >= 25) {
        echo 'Second Number is greater than First Number.' . '<br>';
    }

    # Less than or equal to Operator
    if($num1 <= 5) {
        echo 'First Number is less than or equal to Second Number.' . '<br>';
    } elseif($num2 <= 5) {
        echo 'Second Number is less than or equal to First Number.' . '<br>';
    }

    # Spaceship Operator
    $num1 = 10;
    $num2 = 25;
    // returns -1 because $num1 is less than $num2
    echo ($num1 <=> $num2) . '<br>';

    $num1 = 30;
    $num2 = 25;
    // returns 1 because $num1 is greater to $num2
    echo ($num1 <=> $num2) . '<br>';

    $num1 = 10;
    $num2 = 10;
    // returns 0 because $num1 is equal to $num2
    echo ($num1 <=> $num2) . '<br><br>';

// Increment / Decrement Operators
    # Pre-increment Operators
    $num1 = 15;
    echo ++$num1 . '<br>';

    # Post-increment Operators
    $num1 = 15;
    echo $num1++ . '<br>';

    # Pre-decrement Operators
    $num1 = 15;
    echo --$num1 . '<br>';

    # Post-decrement Operators
    $num1 = 15;
    echo $num1-- . '<br><br>';

// Logical Operators
    # AND Operators - ('and', '&&')
    $num1 = 15;
    $num2 = 25;
    if($num1 == 15 and $num2 == 25) {
        echo 'Both the numbers are equal.<br>';
    }
    if($num1 == 15 && $num2 == 25) {
        echo 'Both the numbers are equal.<br>';
    }

    # OR Operators - ('or', ||)
    if($num1 == 15 or $num2 != 25) {
        echo 'Either of the numbers are equal.<br>';
    }
    if($num1 == 15 || $num2 != 25) {
        echo 'Either of the numbers are equal.<br>';
    }

    # XOR Operators - ('xor')
    if($num1 == 15 xor $num2 == 25) {
        echo 'Case 1 is true <br>';
    } elseif ($num1 == 15 xor $num2 == 35) {
        echo 'Case 2 is true <br>';
    }

    # NOT Operator - ('not')
    if(!($num1 == 25)) {
        echo 'Number 1 condition is not true <br><br>';
    }

// String Operators
    # Concatenation Operator
    $txt1 = "Hello";
    $txt2 = " world!";
    echo $txt1 . $txt2 . '<br>';

    # Concatenation Assignment Operator 
    $txt1 = "Hello";
    $txt2 = " world!";
    $txt1 .= $txt2;
    echo $txt1 . '<br><br>';

// Array Operators
    # Union Operators
    $arr1 = [0 => 'a', 1 => 'b', 2 => 'c'];
    $arr2 = [3 => 'd', 4 => 'e', 5 => 'f'];
    $arr3 = $arr1 + $arr2;
    print_r($arr3);
    echo '<br>';

    # Equality Operator
    $arr1 = [0 => 'a', 1 => 'b', 2 => 'c'];
    $arr3 = [3 => 'a', 4 => 'b', 5 => 'c'];
    $arr4 = [0 => 'a', 2 => 'c', 1 => 'b'];
    $arr5 = [0 => 'a', 1 => 'b', 3 => 'c'];
    var_dump($arr1 == $arr3);
    echo '<br>';
    var_dump($arr1 == $arr4);
    echo '<br>';
    var_dump($arr1 == $arr5);
    echo '<br><br>';

    # Identity Operator
    $arr1 = [0 => 'a', 1 => 'b', 2 => 'c'];
    $arr2 = [3 => 'a', 4 => 'b', 5 => 'c'];
    $arr3 = [0 => 'a', 2 => 'c', 1 => 'b'];
    $arr4 = [0 => 'a', 1 => 'b', 2 => 'c'];
    var_dump($arr1 === $arr2);
    echo '<br>';
    var_dump($arr1 === $arr2);
    echo '<br>';
    var_dump($arr1 === $arr3);
    echo '<br>';
    var_dump($arr1 === $arr4);
    echo '<br><br>';

    # Inequality Operator
    $arr1 = [0 => 'a', 1 => 'b', 2 => 'c'];
    $arr2 = [3 => 'a', 4 => 'b', 5 => 'c'];
    var_dump($arr1 != $arr2);
    echo '<br>';
    $arr1 = [0 => 'a', 1 => 'b', 2 => 'c'];
    $arr2 = [3 => 'a', 4 => 'b', 5 => 'c'];
    var_dump($arr1 <> $arr2);
    echo '<br><br>';

    # Non-identity Operator
    $arr1 = [0 => 'a', 1 => 'b', 2 => 'c'];
    $arr2 = [3 => 'a', 4 => 'b', 5 => 'c'];
    var_dump($arr1 !== $arr2);
    echo '<br>';

// Conditional Assignment Operators
    # Ternary Operator
    $num1 = 15;
    echo ($num1 >= 15) ? 'Number is greater than or equal to 15.<br>' : 'Number is less than 15.<br>';

    # Null coalescing Operators
    $x = 1;
    $var = isset($x) ? $x : "not set";
    echo "The value of x is $var.<br>";

    $y;
    $var = isset($y) ? $y : "not set";
    echo "The value of y is $var.<br>";