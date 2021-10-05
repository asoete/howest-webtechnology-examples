<?php

// $argv -> array

$array = array( 1, 2, 3 );

// echo $array;

print_r( $array );

$array[2] = "hello world";

var_dump( $array );
var_export( $array );

echo "value at index 2: $array[2]\n";

$arr_2d = array(
	array(1,2,3),
	array("x", "y", "z"),
	array(4,5,6)
);

print_r( $arr_2d);

$key_arr = array();
$key_arr = [];

$key_arr = [
	10 => "ten",
	20 => "twenty",
	0  => "zero",
];

print_r( $key_arr);

$ass_arr = [
	"one" => "een",
	"two" => "twee",
	"three" => "drie",
	"..." => "...",
];

print_r( $ass_arr);

echo $ass_arr["two"];
echo "one in dutch = $ass_arr[one]\n";

$arr[] = "append me at the end";
array_push( $arr, "append me at the end as well");
array_unshift( $arr, "append me to the front");

$first_val = array_shift( $arr );
$last_val = array_pop( $arr );

isset( $arr[56] );
