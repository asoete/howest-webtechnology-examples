<?php

/*
Create a script that:

    reads a list of numbers from the command line
    prints the list
    prints the number of numbers (count)
    calculates/prints the min, max and average of the numbers
    prints the list backwards (bonus)
    prints the list sorted (bonus)
*/

$scriptname = array_shift( $argv );
$smallest = $argv[0];
$largest = $argv[0];
$sum = 0;
$nr_items = 0;

foreach( $argv as $index => $value ) {

	echo "Value at index $index is $value\n";

	# Keep smallest value

	if( $value < $smallest ) {

		$smallest = $value;
	}

	# Keep largest value

	if( $value > $largest ) {
		
		$largest = $value;
	}

	# Sum all values
	$sum = $sum + $value; // $sum += $value;

	# Count all values
	$nr_items++;
}

echo "\n";
echo "The largest value in the list is $largest\n";
echo "The smallest value in the list is $smallest\n";
echo "The average number in the list is " . $sum / $nr_items . "\n";
