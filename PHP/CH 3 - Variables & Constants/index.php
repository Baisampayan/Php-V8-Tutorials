<?php

$name = 'Baisampayan Das';
echo " Hello " . $name . '<br>';
echo "Welcome $name <br>";
echo "Good Morning {$name} <br>";

## Call by Value
$a = 1;
$b = $a;
$a = 3;
echo $b . "<br>";

## Call by Reference
$x = 5;
$y = &$x;
$x = 15;
echo $y . '<br>';

## Constants Method 1 :: Using define
/**
 * Syntax: define('NAME', 'value');
 * While echoing Constant don't use '$' sign because it's not a variable
 */

define('PAID_STATUS', 'Paid');
echo PAID_STATUS . '<br>';

# Constant can be only define one time
#define('PAID_STATUS', 'Un-Paid');
#echo PAID_STATUS . '<br>';

# To check if the Constant is define or not - it returns a boolean value
echo defined('PAID_STATUS') . '<br>';

# If the Constant is not define, it will shoe nothing
echo defined('STATUS_NOTHING') . '<br>';

## Constants Method 2 :: Using Const
## Syntax: const NAME = value;

const ACCOUNT_STATUS = 'Active';
echo ACCOUNT_STATUS . '<br>';

/**
 * The main difference between CONST and DEFINE function is that constant created with CONST keyword are actually defined at compile time whereas the DEFINE function is define at runtime.
 * So we can use DEFINE function within our control structure like loop, or if-else, but we cannot use CONST in loop or if-else structure.
 * For example:
 * if (true) {
 * define ('PAID_STATUS', 'Paid');
 * } else {
 * define('PAID_STATUS', 'Un-Paid');
 * }
 * This will work, but if we use the same think with CONST it will throw an error
 * if (true) {
 * const PAID_STATUS = 'Paid';
 * } else {
 * const PAID_STATUS ='Un-Paid';
 * }
 */

## Dynamic Constant Name (ONLY FOR DEFINE FUNCTION)
$ROLE = ADMIN;
$status = 'offline';
define ('USER_' . $ROLE, $status);
echo USER_ADMIN . '<br>';


?>