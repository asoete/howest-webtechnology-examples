<?php

// Scalars

$int = 42;
$floats = 1.23;
$string = 'hello';
$string = "\tworld: $int\n";
$string = 'hello ' . $int . ' world'; // hello 42 world
$bool = true or false;

// arrays

$array = array(1,2,3);
$array = [1,2,3];

$array[] = 4; // append
array_push( $array, 5); // append
array_unshift( $array, 0 ); // insert before 

unset($array[2]); // remove item at index 2
$first_el = array_shift( $array ); // chop of first el
$last_el = array_pop( $array ); // chop of last el.

// key def.

$array = [
	'key' => 'value',
	1 => 'one',
	//...
];

# -----------------------------------------------------------------------------

// conditionals

if( $cond ) {

	// do this block
}

/*
== // equal
=== // equal and the same type
!= // not equal
!== // not equal considering type

>
<
>=
<=

*/

if( 1 == true ) {

	echo "true\n";
}

// combine conditions

// and
// or

if( 1 == false or 2 > 1 ) {

	echo "TRUE\n";
}
elseif() {

}
else {

	echo "FALSE"
}

# ------------------------------------------------------------------------------

// loops

while( $cond ) {

	// execute this while condition is true
}

$counter = 10;
while( $counter > 0 ) {

	echo "$counter\n";

	$counter--;
}

# ------------------------------------------------------------------------------

// FOR

for( $counter=10; $counter > 0; $counter-- ) {

	echo "$counter\n";
}

# ------------------------------------------------------------------------------

// foreach

$array = [
	'key1' => 1,
	'key2' => 2,
	2 => 3
];

foreach( $arrays as $index => $value ) {

	echo "index = $index\n;"
	echo "value = $value\n";
}















