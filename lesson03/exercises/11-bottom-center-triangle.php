<?php

// Base width of the pyramid
$width = $argv[1];
$spaces_on_row = $width / 2;
// $stars_on_row = 0;
$stars_on_row = 1;

while( $stars_on_row < $width ) {

	for( $spaces = 0; $spaces < $spaces_on_row; $spaces++ ) {

		echo " ";
	}

	for( $stars=0; $stars < $stars_on_row; $stars++ ) {

		echo "*";
	}

	$stars_on_row += 2;
	$spaces_on_row--;

	echo "\n";
}

?>
