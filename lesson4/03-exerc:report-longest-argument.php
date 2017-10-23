<?php

/* Create a script which reports the longest argument provided to it... */

$script = array_shift( $argv );

$longest_arg = $argv[0];

foreach( $argv as $arg ) {

	if( strlen($arg) > strlen($longest_arg) ) {
	
		$longest_arg = $arg;
	}
}

echo "The longest arg was: $longest_arg\n";
