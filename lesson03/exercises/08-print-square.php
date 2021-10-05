<?php

$dimension = $argv[1];

for( $rows = 0; $rows < $dimension; $rows++ ) {

	for( $stars = 0; $stars < $dimension; $stars++ ) {

		echo "*";
	}

	echo "\n";
}

?>
