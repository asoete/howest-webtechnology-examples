<?php

// loop array via for

$array = [1,2,3,4,5, 'a', 'b'];
$items_in_array = count($array);

print_r($array);

echo "Via for:\n";

for( $i=0; $i < $items_in_array; $i++) {

	echo "item at index: $i = $array[$i]\n";
}

// use foreach

echo "via foreach:\n";

foreach( $array as $index => $item ) {

	echo "the item at index: $index is: $item\n";
}

// ----------------------------------------------------
// Foreach doesn't require 0 - n-1 keys...

$array = [
	'key1' => 'value1',
	'key2' => 'value2',
	'key3' => 'value3',
];

echo "Exercise:\n";
foreach( $array as $key => $value ) {

	echo "key: $key and value: $value\n";
}











