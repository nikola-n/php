<?php

$array = [
    'items' =>
        ['Milk', 'Eggs', 'Bread'],
];
//JSON -javascript object notation
//from json string to object -> json_decode
//from array to json string ->json_encode
//if true ->array if false or void ->object
$object = json_decode(json_encode($array), false);

foreach($object->items as $item) {
    echo $item, '';
}

var_dump($object);
echo '<pre>', print_r($array), '</pre>';