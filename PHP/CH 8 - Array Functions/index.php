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
/*

array_map()
array_search()
array_unique()
array_slice()
array_combine()
array_diff()
array_intersect()
array_reduce()
array_walk()
array_key_exists()
array_flip()
array_reverse()
array_rand()
array_column()
array_multisort()
array_sum()
array_product()
array_walk_recursive()
usort()
array_diff_assoc()
*/