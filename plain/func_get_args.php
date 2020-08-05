<?php

//Ways of calculating the sum in a function.

function addNumbers(array $numbers) {

	$total = 0; 

	foreach($numbers as $number) {
		$total+=$number;
	}

	return $total;
}

$numbers = [5, 10, 10];

echo 'This is the first way oldest: ' . addNumbers($numbers) . '<hr>'; //25


//func_get_args -> gives array of all the arguments passed in the function

function addWithBuildInPHPfunction() {

	var_dump(func_get_args());
}

echo 'func_get_args outputs the array' . addWithBuildInPHPfunction(5, 10, 10) . '<hr>'; // [0,10,10];


function addAgain()
{
	$total = 0;

	foreach(func_get_args() as $number) {
		if(! is_numeric($number)) {
			continue;
		}

 		$total+=$number;
	}

	return $total;
}

echo 'another way: ' . addAgain(5,10,10,'1alex') . '<hr>';

//1alex will be cast to integer 1 //output: 26

//best way 

function add() {

	return array_sum(func_get_args());
}

echo 'Best way using array_sum with func_get_args wrapped: ' .  add(5, 10, 10); //25