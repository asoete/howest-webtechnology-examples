<?php

$nr = $argv[1];

for( $lines=1; $lines <= $nr; $lines++ ) {

	for( $counter=0; $counter < $nr - $lines; $counter++ ) {

		echo ' ';
	}

	for( $counter=0; $counter < $lines; $counter++ ) {

		echo '*';
	}

	echo "\n";
}
?>
