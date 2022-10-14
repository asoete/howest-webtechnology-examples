<?php

$base = $argv[1] ?? 10;

for( $row = $base; $row > 0; $row-- ) {

	for( $stars = 0; $stars < $row; $stars++ ) {

		echo "*";
	}

	echo "\n";
}

for( $row = $base; $row > 0; $row-- ) {

	for($spaces = 0; $spaces < $base - $row; $spaces++ ) {

		echo " ";
	}

	for( $stars = 0; $stars < $row; $stars++ ) {

		echo "*";
	}

	echo "\n";
}

for( $row = $base; $row > 0; $row-=2 ) {

	for($spaces = 0; $spaces < $base - $row; $spaces+=2 ) {

		echo " ";
	}

	for( $stars = 0; $stars < $row; $stars++ ) {

		echo "*";
	}

	echo "\n";
}

?>
