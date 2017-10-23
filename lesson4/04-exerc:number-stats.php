<?php
/*
Create a script that:

    reads a list of numbers from the command line
    prints the list
    prints the number of numbers (count)
    calculates/prints the min, max and average of the numbers
    count how many times a number occurs in the list
    (prints the list backwards (bonus))
    (prints the list sorted (bonus))
*/

$script = array_shift( $argv );

// Print args
$count = 0;
$min = $argv[0];
$max = $argv[0];
$sum = 0;
$occurences = [];

foreach( $argv as $value ) {

	$count++;
	echo "Arg $count: $value\n";
	
	// Set min to value if $value is smaller then $min
	if( $value < $min ) {
	
		$min = $value;
	}
	
	// Set max to value if $value is larger than $max
	if( $value > $max ) {
	
		$max = $value;
	}
	
	// Add $value to total sum
	$sum += $value;
	
	// Remember occurence of $value
	if( !isset($occurences[$value]) ) {
	
		$occurences[$value] = 0;
	}
	$occurences[ $value ]++;
}

//print_r( $occurences );

echo "The total number of arguments received is: $count\n";
echo "Smallest value: $min\n";
echo "Greatest value: $max\n";
echo "Average value: " . ($sum/$count) . "\n";

// asort( $occurences ); // sort by value but keep key association
ksort( $occurences ); // sort by key
foreach( $occurences as $number => $times ) {

	echo "\t $number occurs $times in arg list...\n";
}

$reverse_argv = array_reverse( $argv );

print_r( $reverse_argv );










