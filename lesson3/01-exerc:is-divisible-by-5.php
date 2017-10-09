<?php
// Create script which takes an argument (a number) from the 
// command line and reports if the argument is divisible by 5...

$number = $argv[1];

if( $number % 5 == 0 ) {

	echo "$number is divisible by 5...\n";
}
else {

	echo "$number is NOT divisible by 5...\n";
}
