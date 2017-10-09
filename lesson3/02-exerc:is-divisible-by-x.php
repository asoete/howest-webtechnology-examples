<?php
// Create script which takes an argument (a number) from the 
// command line and reports if the argument is divisible by 5...

$number = $argv[1];
$divider = $argv[2];

if( $number % $divider == 0 ) {

	echo "$number is divisible by $divider...\n";
}
else {

	echo "$number is NOT divisible by $divider...\n";
}
