<?php

// echo "\t\$Hello World\n";

// echo '\t\$Hello World\n';

// comment type 1
# comment type 2

/*
	comment type 3
	met veel lijnen
*/

$int = 123;
$float = 1.23;

$string = 'hello int = $int';
// echo $string . "\n";

$string = "hello int = $int";
// echo $string . "\n";

$bool = true; // false

// -----------------------------------------------------------

$array = array(1,2,3);
$array = ['a', 'b', 'c'];

print_r( $array );

$keyarray = [
	'key1' => 'value1',
	'key2' => 'value2',
	5,
	6
];

print_r( $keyarray );

// ------------------------------------------------------------


echo $keyarray['key1'] . "\n";

echo "$keyarray[key1] = 5\n";

$keyarray[] = 'extra element';

$keyarray[50] = 'extra element op pos 50';

print_r( $keyarray );

// -----------------------------------------------------------


$first_el = array_shift( $keyarray );

array_unshift( $keyarray, 'vooraan toevoegen...' );

print_r( $keyarray );

$last_el = array_pop( $keyarray );

array_push( $keyarray, 'voeg achteraan toe...');

print_r( $keyarray );

unset($keyarray['key2']);

print_r( $keyarray );







?>
