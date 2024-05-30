<?php

$programingLanguage = ['HTML', 'CSS', 'JavaScript', 'Php'];

echo $programingLanguage[0] . '<br>';

## To check if a item exist in a particular key or not
    # False - if not present | True - if present
var_dump(isset($programingLanguage[4]));

## Inserting in specific index
$programingLanguage[4] = 'React';
echo '<br>' . $programingLanguage[4] . '<br>';

## Inserting an element in the last index
$programingLanguage[] = 'Angular';

## Another way to insert elements at the end of the array
    # This function will modify the original array
array_push($programingLanguage, 'C', 'C++', 'GO');

## To see the full content of the array along with the type of data
var_dump($programingLanguage);
echo '<br>';

## To see only the content of the array
print_r($programingLanguage);
echo '<br>';

## For better using HTML <pre> tags
echo '<pre>';
print_r($programingLanguage);
echo '</pre><br>';

## Removing elements from the end of the array
    array_pop($programingLanguage);

echo '<pre>';
print_r($programingLanguage);
echo '</pre><br>';

## Removing elements from the beginning of the array
array_shift($programingLanguage);

echo '<pre>';
print_r($programingLanguage);
echo '</pre><br>';

## Another way of removing elements from the array
    # This remove the element along with the key from the array.
    # Also the key doesn't get reindex, it retain the maximum integer and if new element is push it will start from the next maximum integer value of the key
unset($programingLanguage[4]);

echo '<pre>';
print_r($programingLanguage);
echo '</pre><br>';

## To see the number of item present in the array
echo count($programingLanguage) . '<br>';

## Creating Associative Array
$assoArray = [
    'php' => '8.2.0',
    'Python' => '3.12.2',
    'CSS' => '4.15'
];

## Echoing the Associative Array
echo $assoArray[CSS] . '<br>';

echo '<pre>';
print_r($assoArray);
echo '</pre><br>';

## To check if key exist in an array
$arrTemp = [
    'a' => 1,
    'b' => null
];
var_dump(array_key_exists('a', $arrTemp));
echo '<br>';

## Another way to check if key exist in an array
var_dump(isset($arrTemp['a']));
echo '<br><br>';
/**
 * The difference between array_key_exists() and isset() is array_key_exists() will tell you if the key exist or not.
 * While isset() will tell you if the key exist and not null
 */
var_dump(array_key_exists('b', $arrTemp));
echo '<br>';
var_dump(isset($arrTemp['b']));
echo '<br>';

## Creating Multi-Dimensional Arrays
$MultiArr = [
    'html' => [
        'creator' => 'Tim Berners-Lee',
        'extension' => '.html',
        'website' => 'https://html.spec.whatwg.org/',
        'isOpenSource' => true,
        'versions' => [
            ['version' => '4.01', 'releaseDate' => '1999-12-24'],
            ['version' => '5', 'releaseDate' => '2014-10-28']
        ]
    ],
    'css' => [
        'creator' => 'Håkon Wium Lie',
        'extension' => '.css',
        'website' => 'https://www.w3.org/Style/CSS/',
        'isOpenSource' => true,
        'versions' => [
            ['version' => '2.1', 'releaseDate' => '2011-06-07'],
            ['version' => '3', 'releaseDate' => '1999-12-17 (initial release)', 'currentStableReleaseDate' => '2022-04-06']
        ]
    ],
    'javascript' => [
        'creator' => 'Brendan Eich',
        'extension' => '.js',
        'website' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 'ES5', 'releaseDate' => '2009-12'],
            ['version' => 'ES6', 'releaseDate' => '2015-06']
        ]
    ],
    'jquery' => [
        'creator' => 'John Resig',
        'extension' => '.js',
        'website' => 'https://jquery.com',
        'isOpenSource' => true,
        'versions' => [
            ['version' => '1.0', 'releaseDate' => '2006-08-26'],
            ['version' => '3.6.0', 'releaseDate' => '2021-03-02']
        ]
    ],
    'php' => [
        'creator' => 'Rasmus Lerdorf',
        'extension' => '.php',
        'website' => 'https://www.php.net',
        'isOpenSource' => true,
        'versions' => [
            ['version' => '7.4.0', 'releaseDate' => '2019-11-28'],
            ['version' => '8.0.0', 'releaseDate' => '2020-11-26']
        ]
    ]
];

## Printing the Multi-Dimensional Array
echo '<pre>';
print_r($MultiArr);
echo '</pre><br>';

## Accessing specific elements
echo $MultiArr['javascript']['versions'][1]['version'] . ': ' . $MultiArr['javascript']['versions'][1]['releaseDate'] . '<br>';