<?php

if( !isset($argv[1]) ) {

	die("usage: php $argv[0] <NUMBER>\n");
}

$max = $argv[1];

$counter = 0;
while( $counter <= $max ) {

	echo "$counter\n";

	$counter++;
}

echo "\n ==== STEPS OF 3 ==== \n";

$counter = 0;
while( $counter <= $max ) {

	echo "$counter\n";

	$counter += 3;
}
?>
