<?php

$width = $argv[1];


for( $row = $width; $row > 0; $row-- ) {

	$spaces_on_row = $width - $row;

	for( $spaces = 0; $spaces < $spaces_on_row; $spaces++ ) {

		echo " ";
	}

	$stars_needed_on_row = $row;
	for( $stars_currently_printed=0; $stars_currently_printed < $stars_needed_on_row; $stars_currently_printed++ ) {

		echo "*";
	}

	echo "\n";
}
