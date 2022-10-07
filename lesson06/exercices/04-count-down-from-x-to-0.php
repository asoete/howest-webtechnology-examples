<?php

if( !isset($argv[1]) ) {

	die("usage: php $argv[0] <NUM>\n");
}

$start = $argv[1];

$counter = $start;
while( $counter >= 0 ) {

	echo $counter . "\n";
	$counter--;
	// $counter = $counter - 1;
	// $counter -= 1;
}

echo "\n ==== STEP BY 3 ==== \n";

$counter = $start;
while( $counter >= 0 ) {

	echo $counter . "\n";
	$counter -= 3;
}
?>
