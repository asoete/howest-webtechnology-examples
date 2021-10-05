<?php

$width = $argv[1];
$nr_stars_on_row = $width;
$nr_spaces_on_row = 0;

while( $nr_stars_on_row > 0 ) {

	for( $spaces_printed = 0; $spaces_printed < $nr_spaces_on_row; $spaces_printed++ ) {
		
		echo " ";
	}

	for( $stars_printed = 0; $stars_printed < $nr_stars_on_row; $stars_printed++ ) {

		echo "*";
	}

	echo "\n";

	$nr_stars_on_row -= 2;
	$nr_spaces_on_row++;
}
