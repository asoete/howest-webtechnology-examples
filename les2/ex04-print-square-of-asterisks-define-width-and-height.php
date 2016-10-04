<?php

/*
Create a script that

    prints a square of a asterisks * if one parameter is defined
    Prints a block with width and height if both parameters are defined.
*/

// array_key_exists: check if array key is defined/set

$width = $argv[1];

if( array_key_exists(2, $argv) ) {

	$height = $argv[2];
}
else {

	$height = $width;
}

# ------------------------------------------------------------------------------

for( $j=0; $j < $height; $j++) {

	for( $i=0; $i < $width; $i++ ) {

		echo '*';
	}
	
	echo "\n";
}
