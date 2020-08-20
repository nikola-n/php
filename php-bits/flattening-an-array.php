<?php

$array = [
    'name'     => [
        'Your name is required',
        'Your name cannot contain any numbers',
        'key' => [
            'Something',
        ],
    ],
    'dob'      => [
        'Your date of birth is required',
    ],
    'password' => [
        'Your password must be 6 characters or more',
        'Your password isn\'t strong enough',
    ],
    'Something else',
];

echo "First example:";

function flatten_array(array $items, array $flattened = [])
{
    foreach ($items as $item) {
        if (is_array($item)) {
            $flattened = flatten_array($item, $flattened);
            continue;
        }
        $flattened[] = $item;
    }

    return $flattened;
}

var_dump(flatten_array($array));
echo "<hr>";
echo "Second Example:";
//standard built-in php class that allows us to itterate
//in the multidimensional arrays

$flat = iterator_to_array(new RecursiveIteratorIterator(
    new RecursiveArrayIterator($array)
), false);

var_dump($flat);