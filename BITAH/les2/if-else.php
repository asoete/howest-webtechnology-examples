<?php

// print_r($argv);

$nr = $argv[1];
$check = $argv[2];

if( $nr > $check ) {

	echo "$nr is groter dan $check\n";
}
elseif( $nr == $check ) {

	echo "$nr is $check\n";
}
else {
	
	echo "$nr is kleiner dan $check\n";
}

?>
