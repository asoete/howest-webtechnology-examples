<?php

print_r( $argv );

$scriptname = array_shift( $argv );

print_r( $argv );

$count = count($argv);

/* $count--; */

echo "#args = $count\n";

for( $index = 0; $index < $count; $index++ ) {

	echo "arg at pos $index = $argv[$index]\n";
}

?>
