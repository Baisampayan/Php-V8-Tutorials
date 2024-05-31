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


/*
array_merge()
array_filter()
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