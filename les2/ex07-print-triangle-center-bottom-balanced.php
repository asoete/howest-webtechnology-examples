<?php

/*
Create a script that prints a center + bottom balanced triangle of asterisks with base defined by parameter.
*/

$base = $argv[1];

for( $row=1; $row < $base; $row+=2 ) {

	$nr_spaces = ( $base - $row ) / 2;

	for( $i=0; $i < $nr_spaces; $i++ ) {

		echo ' ';
	}

	for( $i=$row; $i > 0; $i-- ) {

		echo '*';
	}

	echo "\n";
}
