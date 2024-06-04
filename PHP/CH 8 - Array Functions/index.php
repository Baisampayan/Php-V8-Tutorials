<?php

## array_keys() - Returns all the keys of an array
    # Syntax - array_keys(array, value, strict);
    $arrkey = ["Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander"];
    print_r(array_keys($arrkey));
    echo '<br>';
    print_r(array_keys($arrkey, 'X5'));
    echo '<br>';

## array_values() - Returns all the values of an array
    # Syntax - array_values(array);
    $tempArray = ['HTML', 'CSS', 'JavaScript', 'jQuery'];
    print_r(array_values($tempArray));
    echo '<br>';

## array_push() - Inserts one or more elements to the end of an array
    # Syntax - array_push(array, value1, value2, ...);
    array_push($tempArray, 'Php', 'React');
    print_r($tempArray);
    echo '<br>';

## array_pop() - Deletes the last element of an array
    # Syntax - array_pop(array);
    array_pop($tempArray);
    print_r($tempArray);
    echo '<br>';

## array_shift() - Removes the first element from an array, and returns the value of the removed element
    # Syntax - array_shift(array);
    array_shift($tempArray);
    print_r($tempArray);
    echo '<br>';

## array_unshift() - Adds one or more elements to the beginning of an array
    # Syntax - array_unshift(array, value1, value2, value3, ...);
    array_unshift($tempArray, 'HTML', 'Bootstrap');
    print_r($tempArray);
    echo '<br>';

## array_merge() - Merges one or more arrays into one array
    # Syntax - array_merge(array1, array2, array3, ...);
    print_r(array_merge($tempArray, $arrkey));
    echo '<br>';

## array_filter() - Filters the values of an array using a callback function
    # Syntax - array_filter(array, callback, flag);
    $tempNum = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    print_r(array_filter($tempNum, function ($value) {
        return $value >= 5;
    }));
    echo '<br>';

    # Example 2
    echo '<pre>';
    print_r(array_filter($tempNum, function ($data){
        return $data % 2 == 0;
    }));
    echo '</pre>';
    echo '<br>';

    $tempNum[2] = '3';
    $tempNum[5] = '6';
    # Example 3
    echo '<pre>';
    print_r(array_filter($tempNum, function ($data){
        return is_int($data);
    }));
    echo '</pre>';
    echo '<br>';

    # Example 4
    $tempItems = [
        'apples' => 5,
        'oranges' => 3,
        'pears' => 7,
        'bananas' => 18,
        'grapes' => 24,
        'mangoes' => 6,
    ];
    echo '<pre>';
    print_r(array_filter($tempItems, function($data, $key) {
        return $data >= 5 && $key !== 'pears';
    }, ARRAY_FILTER_USE_BOTH));
    echo '</pre>';

    # Example 5
    echo '<pre>';
    print_r(array_filter($tempItems, function($key) {
        return !in_array($key, ['apples', 'pears', 'grapes']);
    }, ARRAY_FILTER_USE_KEY));
    echo '</pre>';

## array_map() - Sends each value of an array to a user-made function, which returns new values
    # Syntax - array_map(callback, array1, array2,...);
    $tempNum = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    function sqr($value) {
        return $value * $value;
    };
    $resultSqr = array_map('sqr', $tempNum);
    echo '<pre>';
    print_r($resultSqr);
    echo '</pre><br>';

    echo '<pre>';
    print_r(array_map(function($value){
        return $value * $value * $value;
    }, $tempNum));
    echo '</pre><br>';

    $tempFruits = ['apple', 'orange', 'pear', 'pineapple', 'banana', 'guava', 'lemon', 'dragonfruit'];
    $tempQuantity =[5, 7, 3, 8, 2, 9, 2, 4];
    echo'<pre>';
    print_r(array_map(function($fruits, $quantity){
        return $fruits.' - '. $quantity;
    }, $tempFruits, $tempQuantity));
    echo '</pre><br>';

## array_search() - Searches an array for a given value and returns the key
    # Syntax - array_search(value, array, strict);
    $tempNum = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    print_r(array_search(5, $tempNum));
    echo '<br>';
    print_r(array_search(7, $tempNum, true));
    echo '<br>';

## array_unique() - Removes duplicate values from an array
    # Syntax - array_unique(array, sort_flags);
    $tempNum = [1, 2, 3, 4, 3, 5, 6, 7, 5, 8, 9, 10];
    print_r(array_unique($tempNum));
    echo '<br>';
    print_r(array_unique($tempNum, SORT_STRING));
    echo '<br>';

## array_slice() - Returns selected parts of an array
    # Syntax - array_slice(array, start, length, preserve_keys);
    $tempNum = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    print_r(array_slice($tempNum, 2, 3));
    echo '<br>';
    print_r(array_slice($tempNum, 2, 3, true));
    echo '<br>';

## array_combine() - Creates an array by using the elements from one "keys" array and one "values" array
    # Syntax: array_combine(keys, values);
    $tempNum = [1, 2, 3, 4, 5, 6, 7, 8];
    $tempFruits = ['apple', 'orange', 'pear', 'pineapple', 'banana', 'guava', 'lemon', 'dragonfruit'];
    echo '<pre>';
    print_r(array_combine($tempNum, $tempFruits));
    echo '</pre><br>';

## array_diff() - Compare arrays, and returns the differences (compare values only)
    # Syntax - array_diff(array1, array2, array3,...);
    $tempNum = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $tempNum2 = [1, 2, 3, 4, 5];
    echo '<pre>';
    print_r(array_diff($tempNum, $tempNum2));
    echo '</pre><br>';

## array_intersect() - Compare arrays, and returns the matches (compare values only)
    # Syntax - array_intersect(array1, array2, array3,...);
    echo '<pre>';
    print_r(array_intersect($tempNum, $tempNum2));
    echo '</pre><br>';

## array_reduce() - Returns an array as a string, using a user-defined function
    #Syntax: array_reduce(array, myfunction, initial);
    $tempCost = [14, 25, 37, 47, 45, 61, 78, 38, 59, 10];
    echo '<pre>Total Cost: $ ';
    print_r(array_reduce($tempCost, function($carry, $item){
        return $carry + $item;
    }, 0));
    echo '</pre><br>';

## array_walk() - Applies a user function to every member of an array.
    # Syntax: array_walk(array, myfunction, parameter...);
    $arrkey = ["Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander"];
    echo '<pre>';
    array_walk($arrkey, function($value, $key){
        echo "The best car of $key is $value.<br>";
    });
    echo '</pre><br>';

## array_walk_recursive() - Applies a user function recursively to every member of an array
    # Syntax: array_walk_recursive(array, myfunction, parameter...);
    # The difference between this function and the array_walk() function is that with this function you can work with deeper arrays (an array inside an array).
    $arrcar1 = ["Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander"];
    $arrcar2 = [$arrcar1, "Honda"=>"City","Hyundai"=>"Creta"];
    echo '<pre>';
    array_walk_recursive($arrcar2, function($value, $key){
        echo "The best car of $key is $value.<br>";
    });
    echo '</pre><br>';

## array_key_exists() - Checks if the specified key exists in the array
    # Syntax - array_key_exists(key, array);
    $arrkey = ["Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander"];
    if(array_key_exists("Volvo", $arrkey)){
        echo "Volvo is present in the array<br>";
    } else {
        echo "Volvo is not present in the array<br>";
    };
    echo '<pre>';
    print_r(array_key_exists("Volvo", $arrkey));
    echo '</pre><br>';

## array_flip() - Flips/Exchanges all keys with their associated values in an array.
    # Syntax - array_flip(array);
    $arrkey = ["Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander"];
    echo '<pre>';
    print_r(array_flip($arrkey));
    echo '</pre><br>';

## array_reverse() - Returns an array in the reverse order
    # Syntax - array_reverse(array, preserve_keys);
    $arrkey = ["Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander"];
    echo '<pre>';
    print_r(array_reverse($arrkey, true));
    echo '</pre><br>';

## array_rand() - Returns one or more random keys from an array
    # Syntax - array_rand(array, num);
    $arrkey = ["Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander", "Honda"=>"City"];
    echo '<pre>';
    print_r(array_rand($arrkey, 2));
    echo '</pre><br>';

## array_column() - Returns the values from a single column in the input array
    # Syntax - array_column(array, column_key, index_key);
    $tempData = [
        [
            'id' => 5698,
            'first_name' => 'Peter',
            'last_name' => 'Griffin',
        ],
        [
            'id' => 4767,
            'first_name' => 'Ben',
            'last_name' => 'Smith',
        ],
        [
            'id' => 3809,
            'first_name' => 'Joe',
            'last_name' => 'Doe',
        ]
    ];
    echo '<pre>';
    print_r(array_column($tempData, 'first_name', 'id'));
    echo '</pre><br>';

## array_multisort() - Sorts multiple or multi-dimensional arrays
    # Syntax - array_multisort(array1, sortorder, sorttype, array2, array3, ...);
    $tempNum = [21, 82, 53, 44, 95, 62, 17, 8, 49, 10];
    $tempFruits = ['apple', 'orange', 'pear', 'pineapple', 'banana', 'guava', 'lemon', 'dragonfruit'];
    echo '<pre>';
    array_multisort($tempNum, SORT_ASC, SORT_NUMERIC); 
    array_multisort($tempFruits, SORT_DESC, SORT_REGULAR);
    echo '<br>';
    print_r($tempNum);
    echo '<br>';
    print_r($tempFruits);
    echo '</pre><br>';

## array_sum() - Returns the sum of the values in an array
    #Syntax - array_sum(array);
    echo(array_sum($tempNum)) . '<br>';

## array_product() - Calculates the product of the values in an array
    # Syntax - array_product(array);
    echo(array_product($tempNum)) . '<br>';

# array_diff_assoc() - Compare arrays, and returns the differences (compare keys and values)
    #This function compares the keys and values of two (or more) arrays, and return an array that contains the entries from array1 that are not present in array2 or array3, etc.
    # Syntax - array_diff_assoc(array1,array2,array3...);
    # Example 1
    $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $a2=array("e"=>"red","f"=>"green","g"=>"blue");
    $result=array_diff_assoc($a1,$a2);
    print_r($result);

    #Example 2
    $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $a2=array("a"=>"red","f"=>"green","g"=>"blue");
    $a3=array("h"=>"red","b"=>"green","g"=>"blue");
    $result=array_diff_assoc($a1,$a2,$a3);
    print_r($result);

## usort() - Sorts an array by values using a user-defined comparison function
    # Syntax - usort(array, myfunction);
    $tempNum = [21, 82, 53, 44, 95, 62, 17, 8, 49, 10];
    usort($tempNum, function($a, $b){
        /*if($a == $b) {
            return 0;
        }
        return ($a < $b)? -1 : 1;*/
        return ($a == $b)? 0 : ($a < $b) ? -1 : 1;
    });
    foreach($tempNum as $key => $val) {
        echo '[' . $key . '] => ' . $val . '<br>';
    }
