<?php

$dimension = $argv[1];

for( $rows = 0; $rows < $dimension; $rows++ ) {

	// Calc spaces
	$spaces_to_print = $dimension - $rows;
	
	// Print the space
	// for( $spaces = 0; $spaces < $spaces_to_print; $spaces++ ) {
	for( $i = 0; $i < $spaces_to_print; $i++ ) {

		echo " ";
	}

	for( $stars = 0; $stars <= $rows; $stars++ ) {

		echo "*";
	}

	echo "\n";
}

?>
