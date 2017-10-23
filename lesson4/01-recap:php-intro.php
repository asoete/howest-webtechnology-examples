<?php

echo "show this";
print("show this to");

$var = "value of \$var";

echo "\t -> tab; \n -> newline, \"$var\" \$" . "\n";
echo '\t -> tab; \n -> newline, "$var"' . "\n";

$int = 123;
$float = 1.23;
$bool = true or false;
$string = "Some words";
$array = array( 'first value', 2, 3, "fourth value" );
$array = [ 'first value', 2, 3, "fourth value" ];

print_r( $array );

$array[] = 'add value';

print_r( $array );

$array[10] = 'Add @ pos 10';
array_push( $array, 'value', 'value2');
echo array_pop( $array ) . "\n";
print_r( $array );
array_unshift( $array, 'add in front');
echo array_shift( $array ) . "\n";

print_r( $array );

// $array = array( 'key1' => 'value1', '...' );
$array = [
	'key1' => 'value1',
	'key2' => 'value2',
	'...' => '...'
];

// ----

if( '1' == 1 and 2 == '2' ) {
	// execute if true
}
else {

	// execute if cond == false
}

/*
true and true -> true
true or true -> true
true or false -> true
false or false -> false
*/

$counter = 0;
while( $counter < 10 ) {

	// execute while condition is true
	$counter++; // $counter += 1; $counter = $counter + 1;
}


for( $counter=0; $counter < 10; $counter++ ) {

	// execute while counter is smaller then 10
}


$array_length = count( $array ); // 5 -> index: 0,1,2,3,4
for ($i = 0; $i < $array_length; $i++) {
    
    $value = $array[$i];
}


foreach( $array as $value ) {

	echo "$value\n";
}


foreach( $array as $key => $value ) {

	echo "$key => $value\n";
}

// $argv -> args cli

// argument 1: '...'
// argument 2: '...'

print_r( $argv );


















