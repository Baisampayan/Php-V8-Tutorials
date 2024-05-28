<?php

$str1 = "Welcome to PHP Tutorials";

## strlen() - Returns the length of a string
    echo strlen($str1) . '<br>';
    # So, if you want to get the last character of the string
    echo $str1[strlen($str1)-1] . '<br>';

## strpos() - Returns the position of the first occurrence of a string inside another string (case-sensitive)
    echo strpos($str1, 'P') . '<br>';

## stripos() - Returns the position of the first occurrence of a string inside another string (case-insensitive)
    echo stripos($str1, 'p') . '<br>';

## strip_tags() - Strips HTML and PHP tags from a string
    $str2 = "Hello <b>World</b>.";
    echo strip_tags($str2) . '<br>';

## ord() - Returns the ASCII value of the first character of a string
    echo ord('A') . '<br>';

## chr() - Returns a character from a specified ASCII value
    echo chr(97) . '<br>';

## lcfirst() - Converts the first character of a string to lowercase
    echo lcfirst('Hello') . '<br>';

## strtolower()	- Converts a string to lowercase letters
    echo strtolower('PHP') . '<br>';

## ucfirst() - Converts the first character of a string to uppercase
    echo ucfirst('london') . '<br>';

## strtoupper() - Converts a string to uppercase letters
    echo strtoupper('php') . '<br>';

## substr() - Returns a part of a string. A negative number - Start at a specified position from the end of the string
    # Syntax - substr(string,start,length)
    echo substr('Hello World', 6) . '<br>';

## substr_replace() - Replaces a part of a string with another string
    # Syntax - substr_replace(string,replacement,start,length)
    echo substr_replace("Hello World", "friend", 6) . '<br>';

## chop() - Removes whitespace or other characters from the right end of a string
    # Syntax - chop(string,charlist);
    /**
    *  Optional. Specifies which characters to remove from the string. 
    *   The following characters are removed if the charlist parameter is empty:
    *       "\0" - NULL
    *       "\t" - tab
    *       "\n" - new line
    *       "\x0B" - vertical tab
    *       "\r" - carriage return
    *       " " - ordinary white space
    */
    echo chop($str1, "Tutorials") . '<br>';

## implode() - Returns a string from the elements of an array
    # Syntax - implode(separator,array);
    # Separator(Optional) - Specifies what to put between the array elements. Default is "" (an empty string)
    # Array(Required) - The array to join to a string
    $arr1 = ["Php", "is", "a", "coding", "language"];
    echo implode($arr1, ' ') . '<br>';

## join() - The join() function returns a string from the elements of an array. The join() function is an alias of the implode() function.
    # Syntax - join(separator,array);
    echo join(' ', $arr1) . '<br>';

## explode() - Breaks a string into an array
    # explode(separator,string,limit);
    print_r(explode(" ", $str1));
    echo '<br>';

## number_format() - Formats a number with grouped thousands
    # Syntax - number_format(number,decimals,decimalpoint,separator);
    echo (number_format("2536475860") . '<br>');
    echo (number_format("1000000", 2, ".", ",") . '<br>');

## str_split() - Splits a string into an array
    # Syntax - str_split(string,length);
    print_r(str_split("Hello World"));
    echo '<br>';
    print_r(str_split("Hello World", 3));
    echo '<br>';

## str_word_count() - Count the number of words in a string
    # str_word_count(string,return,char);
    echo str_word_count("Hi Tom, good morning. How are you?") . '<br>';

## strcasecmp() - Compares two strings (case-insensitive)
    # Syntax - strcasecmp(string1,string2);
    echo (strcasecmp('Hello World', 'HELLO WORLD')) . '<br>';