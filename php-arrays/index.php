<?php

// array_chunk

$items = ['A', 'B', 'C', 'D', 'E', 'F'];

//Chunk it to subset of 2

/*
   [
    ['A', 'B'],
    ['C', 'D'],
    ['E', 'F']
   ]
*/

//1. Way
//var_dump(array_chunk($items, 2));

//2. Way

//$result = [];
//
//$chunkIndex = 0;
//$index      = 0;
//$chunkCount = 2;

//foreach ($items as $item) {
//    $result[$chunkIndex][] = $item;
//
//    if ($index === $chunkCount - 1) {
//        $chunkIndex++;
//
//        $index = 0;
//
//        continue;
//    }
//
//    $index++;
//}
//
//var_dump($result);

//3. Way
//calculate the $chunkIndex
// get the index from the key

$result = [];

//$chunkIndex = 0;
//$index      = 0;
$chunkCount = 2;

foreach ($items as $index => $item) {

    $result[floor($index / $chunkCount)][] = $item;

    //if ($index === $chunkCount - 1) {
    //    $chunkIndex++;
    //
    //    $index = 0;
    //
    //    continue;
    //}

    //$index++;
}

// turn it to a reusable function
function chunk($array, $chunkCount)
{
    $result = [];

    foreach ($array as $index => $item) {
        $result[floor($index / $chunkCount)][] = $item;

    }

    return $result;
}

//var_dump(chunk($items, 2));

//4. Way
//use array_reduce - allows to reduce an array to a single value
//and that single value could be another array

$index      = 0;
$chunkCount = 2;

// When you pass index with use (pass by value) you get a new variable each time, so index will always be 0 in this case.
// (pass by reference) You must reference the index variable to point in to the same location in memory.
$results = array_reduce($items, function ($carry, $val) use (&$index, $chunkCount) {

    $carry[floor($index / $chunkCount)][] = $val;

    $index++;

    return $carry;
}, []);

//var_dump($results);

// Refactor to function

function chunkIt($array, $count)
{
    $index = 0;
    return array_reduce($array, function ($carry, $val) use (&$index, $count) {

        $carry[floor($index / $count)][] = $val;

        $index++;

        return $carry;
    }, []);
}

//var_dump(chunkIt($items, 3));

//5. Way
//Using array_map
$chunkCount = 2;
// returns new value for the each item in the array, so in this case it will return a new array for each item so 6 arrays.
$result = array_map(function ($val) use ($items, $chunkCount) {
    //get the index
    $index = array_search($val, $items);
    return array_slice($items, $index * $chunkCount, $chunkCount);
}, $items);

// to remove the empty arrays
$result = array_filter($result);
//var_dump($result);

// Refactor to function

function chunks($array, $count)
{
    return $result = array_filter(array_map(function ($val) use ($array, $count) {
        return array_slice($array, array_search($val, $array) * $count, $count);
    }, $array));

}

var_dump(chunks($items, 3));