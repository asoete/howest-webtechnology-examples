<?php

$base = $argv[1] ?? 10;

echo "base: $base\n";

for( $rows = 1; $rows <= $base; $rows++ ) {

	for( $spaces = 0; $spaces < $base - $rows ; $spaces++ ) {

		echo " ";
	}

	for( $stars = 0; $stars < $rows; $stars++ ) {

		echo "*";
	}

	echo "\n";
}

?>
