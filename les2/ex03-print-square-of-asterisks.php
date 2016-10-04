<?php

/*
Create a script that

    prints a square of a asterisks * if one parameter is defined
    Prints a block with width and height if both parameters are defined.
*/

$nr_of_ast = $argv[1];

for( $j=0; $j < $nr_of_ast; $j++) {

	for( $i=0; $i < $nr_of_ast; $i++ ) {

		echo '*';
	}
	
	echo "\n";
}
