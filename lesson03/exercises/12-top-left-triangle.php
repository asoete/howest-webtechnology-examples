<?php

$width = $argv[1];

for( $row = $width; $row > 0; $row-- ) {

	for( $stars=0; $stars < $row; $stars++ ) {

		echo "*";
	}

	echo "\n";
}
