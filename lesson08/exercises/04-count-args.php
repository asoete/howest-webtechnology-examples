<?php

print_r( $argv );

$scriptname = array_shift( $argv );

print_r( $argv );

echo "built in count: " . count( $argv ) . "\n";

$count = 0;

foreach( $argv as $param ) {

	$count++;
}

echo "foreach count: $count\n";

?>
