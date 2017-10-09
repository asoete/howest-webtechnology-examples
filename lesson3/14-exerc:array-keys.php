<?php

// Extract keys from array...

$array = array(
    'position 1' => 'hello',
    'position 2' => 'world',
    3            => 'three',
    'four'       => 4
);

print_r($array);

$abc = [];
foreach( $array as $key => $value ) {

	//	array_push( $keys, $key );
	$abc[] = $key;
	// print_r($abc);
}

print_r( $abc );

// print_r( array_keys($array) );
