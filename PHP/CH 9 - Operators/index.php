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