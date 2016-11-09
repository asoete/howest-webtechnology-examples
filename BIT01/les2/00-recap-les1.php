<?php

// Scalar variables/types -> atomic 

$int = 42;
$float = 123.456;
$string = 'string must enclosed by quotes';

// "" <-> ''
// "" -> interpreted
	// \n = newline
	// \t = tab
	// (\r) = windows newline
	// \$ = literal $
	// $var = value of $var variable
	// \" = literal "

$var = "dogs";

echo = "I like $var\n"; // I like dogs
echo = "I like \$var\n"; // I like $var
echo = 'I like $var\n'; // I like $var\n

$boolean = true || false;

# Array

$array1 = array(1,2,3,4);
$array2 = [1,2,3,4];

// zero-base: start index 0 add 1 per added element

print_r( $array ); // print array

$var = $array2[2]; // -> 3 // doesn't remove el from array

$array2[2] = 'new value';

// add elements to array

array_unshift( $array, $value ); // add $value in front of array
array_push( $array, $value ); // add $value in back of array
$array[] = 'new value'; // push 'new value' at back of array

// remove elements from array

unset($array[2]); // deletes key 2 in array
$value = array_shift( $array ); // chop of first element // removes the element
$value = array_pop( $array ); // chop of last element from array // removes the el.
$count = count($array) // count array

// Conditionals

if( true ) {

	// execute this block
}
elseif( true ) {

	// Execute is `if` is false and `elseif` is true
}
else {
	
	// execute this if `if` condition evaluates to false
}

// Compare

// == : is equal | 1 == '1' (true)
// === : is equal and of equal type | 1 !== '1'
// != : not equal
// !== : not equal without type juggling
// > : larger then
// >= : larger or equal
// < : smaller than
// <= smaller or eqal

if( 1 > 2 ) {
	
	echo "true";
}

// multiple conditions

/*
if( (cond1) <operator> (cond2) ) {

	
}
*/

if( 2 < 4 && 2 > 1 ) {

	echo "true";
}

// &&, and: both are true
// ||, or: one or the other is true

if( 2 < 4 and 2 > 1 ) {

	echo "true";
}

// Loops

// While

while( true ) {

	// execute block
}

// Example

$counter = 0;

while( $counter < 10 ) {

	echo "counter = $counter\n";
	// $counter = $counter + 1;
	$counter++;
	//$counter += 2; // 2 per iteration
}

// for

for( $counter=0; $counter < 10; $counter++ ) {

	echo "counter = $counter\n";
}













?>
