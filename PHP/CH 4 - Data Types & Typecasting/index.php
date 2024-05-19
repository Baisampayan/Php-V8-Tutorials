<?php
/* Data Types & Typecasting */

## Scalar Types - 4
    # bool - true or false
    $payment_status = true;
    echo $payment_status . '<br>';
    
    # int - 2, 10, 99, -55
    $age = 27;
    echo $age . '<br>';

    # float - 1.5, 6.75, 76.9, -8.01
    $price = 5.99;
    echo $price . '<br>';

    # string - "Hello World", "Php"
    $greeting = "Good Morning";
    echo $greeting . '<br>';
## How To Know The Type Of Variable
    # gettype();
    echo gettype($payment_status) . '<br>';
    echo gettype($age) . '<br>';
    echo gettype($price) . '<br>';
    echo gettype($greeting) . '<br>';

    # var_dump();
    echo var_dump($payment_status) . '<br>';
    echo var_dump($age) . '<br>';
    echo var_dump($price) . '<br>';
    echo var_dump($greeting) . '<br>';

## Compound Types - 4
    # array
    $arrexample = [1, -3, 65, 6.99, "Test"];
    print_r($arrexample) . '<br>';
    # object
    # callable
    # iteration

## Special Types - 2
    # resource
    # null
    $x = null;
    echo '<br>';
    var_dump($x);
    echo '<br>';
    var_dump(is_null($x));
    echo '<br>';
    var_dump($x === null);
    echo '<br>';

## Example of Typecasting
echo '<br>';
$num = '4';
echo var_dump($num) . '<br>';
echo var_dump((int)$num) . '<br>';

# Example 2
function sum($num1, $num2) {
    echo var_dump($num1, $num2) . '<br>';
    return $num1 + $num2;
}

echo sum(5, 8) . '<br>';
echo sum(15, '8') . '<br>';

function sum2(int $num1, int $num2) {
    echo var_dump($num1, $num2) . '<br>';
    return $num1 + $num2;
}
echo sum2(10, '8') . '<br>';

## Strict Mode
    # Syntax: declare (strict_type = 1);
    # Strict Mode means it will through an error if you pass another type into integer, even if you pass something that can be converted dynamically.
    # For example

// declare (strict_type = 1);
// function sum2(int $num1, int $num2) {
//     return $num1 + $num2;
// }
// echo sum2(10, '8') . '<br>';

    # However there is one exception here, even in STRICT mode you can pass integer where a float type is excepted without any error.