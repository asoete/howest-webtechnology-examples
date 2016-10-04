<?php

// ARGV

print_r( $argv );

echo "Print a list of arguments: for...\n";

$number_of_elements_in_argv = count($argv);

for( $counter=1; $counter < $number_of_elements_in_argv; $counter++) {

	echo "\tThe argument at position: $counter is $argv[$counter]\n";
}

// -----------------------------------------------------------------------------

echo "Print a list of arguments: foreach...\n";

// unset($argv[0]);
$scriptname = array_shift( $argv ); // array-shift re-indexes array: starts from0 to n-1

foreach( $argv as $index => $arg ) {

	$index = $index + 1; // print 1 based positions
	echo "\tThe argument at position: $index is $arg\n";
}
