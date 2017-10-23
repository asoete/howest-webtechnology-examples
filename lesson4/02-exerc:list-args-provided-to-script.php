<?php
/* Create a script which list all the arguments provided to the script:
	Argument1: 'first arg'
	Argument2: 'second arg'
	...
*/

$script = array_shift( $argv ); // remove scriptname from argv array
$count = 0;

foreach( $argv as $arg ) {

	$count++;
	echo "\tArgument $count: $arg\n";
}

echo "\nVia Key:\n";

foreach( $argv as $key => $arg ) {

	echo "\tArgument ". ($key + 1) .": $arg\n";
}
