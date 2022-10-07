<?php

$array_old = array( "one", "two", "three" );
$array_new = [ "one", "two", "three", 123, 123.12, true, ["arrayception"] ];

print_r( $array_old );
print_r( $array_new );

# var_dump( $array_new );

$grid = [
	["row1", "abc"],
	["row2", "xyz"],
	["row3", ""],
];

print_r( $grid );

$array = [
	"one",
	"two",
	"three",
	"key1" => "one",
	"key2" => "two",
	"key2" => "three",
	4 => "four",
	"five",
];

echo $array["key1"] . "\n";

echo "key 5: $array[5]\n";
echo "key 5: $array[key2]\n";

$array["key3"] = "hello world";
$array[] = "numeric index!";

array_push( $array, "insert from array_push");
array_unshift( $array, "insert from array_unshift");
$shifted = array_shift( $array );
echo "shifted value: '$shifted'\n";
$popped = array_pop($array);
// array_pop($array);
echo "popped value: '$popped'\n";

print_r($array);

echo "items in array == " . count($array) . "\n";

print_r( explode(";", "one;two;three") ); // split

echo implode("\t", [ 1,2,3,4,5,6 ] );

$input = [1,2,3,4,5,6,7,8,9];

print_r($input);

$last_index = count( $input ) -1;
echo "count: ". count($input) ."; last index = $last_index\n";

// for( $index = 0; $index <= last_index; $index++ ) {
for( $index = 0; $index < count($input); $index++ ) {

	echo "index=$index ; value=$input[$index]\n";
}

$input = [
	"one" => "een",
	"two" => "twee",
	"three" => "drie",
];

echo count($input) . "\n";
print_r($input);

foreach( $input as $value ) {

	echo "value=$value\n";
}

foreach( $input as $key => $value ) {

	echo "key=$key ; value=$value\n";
}

foreach( $argv as $parameter ) {

	// do something with the parameter...
}

?>
