<?php

print_r( $argv );

$array = array();

print_r( $array );

$array = array(1, 2, 3, 'four', 3.14, true);

print_r( $array );

$array = [1, 2, 3, 'four', 3.14, true];

print_r( $array );

echo $array[3] . "\n";

$array = [
	1 => 'one',
	50 => 'two',
	'hello' => 'world',
];

print_r( $array );

$array['add'] = 'item';
$array[] = 'item2';

print_r( $array );

$array2 = [];

$array2[] = 'one';
$array2[] = 'two';
$array2[] = 3;

print_r( $array2 );

array_push($array2, 'additem1', 'additem2');

print_r( $array2 );

array_unshift( $array2, 'addinfront');

print_r( $array2 );


$first_item = array_shift( $array2 );
echo "The first item was: $first_item\n";

print_r( $array2 );

$last_item = array_pop( $array2 );
echo "The last item was $last_item\n";
print_r( $array2 );

print_r( $array );

foreach( $array as $value ) {

	echo "array value is: $value\n";
}

echo "\n";
foreach( $array as $key => $value ) {

	echo "array value at key $key is: $value\n";
}



// count items in an array...

$count = 0;
foreach ($array as $key => $value) {
   
   $count++; 
}

echo "\$array has $count items...\n";
echo "\$array has ". count($array) ." items...\n";















