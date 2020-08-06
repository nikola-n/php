<?php
$people = [
  ['John', 'Doe'],
  ['Jeffrey', 'Way']
];

foreach($people as [$first, $last])
{
    //first se odneuva na John, last na Doe
    //[$first, $last] = $person;
    var_dump("{$first} {$last}");
}

//Ako sakame samo vtoriot oelement da go zeeeme
[,$last]= ['John','Doe'];

var_dump($last);

//[$user1, $user2, $user3] =factory('App\User::class' ,3)->create();
preg_match('/\d{3}-\d{3}-(\d{4})/', '555-555-5555', $matches);
var_dump($matches[1]);
[$full,$lastFour]= $matches;

var_dump($lastFour);