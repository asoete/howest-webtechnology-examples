<?php

$base = $argv[1] ?? 10;

for( $row=1; $row < $base; $row+=2 ) {

	for( $spaces=0; $spaces < $base - $row ; $spaces+=2 ) {

		echo " ";
	}

	for($stars=0; $stars < $row; $stars++ ) {

		echo "*";
	}

	echo "\n";
}

?>
