<?php

if( !isset($argv[1]) or ! isset($argv[2]) or ! isset($argv[3]) ) {

	die("usage: php $argv[0] <DIR> <FROM> <TO>\n");
}

// if( $direction == "guess" ) {
// 
// 	if( $argv[2] < $argv[3] ) {
// 
// 		$direction = "up";
// 	}
// 	else {
// 		$direction = "down"
// 	}
// }

$direction = $argv[1];
$from = $argv[2];
$to = $argv[3];

if( $direction == "up" ) {

	$counter = $from;
	while( $counter <= $to ) {

		echo "$counter\n";
		$counter++;
	}

	// for( $counter=$from; $counter <= $to; $counter++ ) {

	// 	echo "$counter\n";
	// }
}
elseif( $direction == "down" ) {

	for( $counter=$from; $counter >= $to; $counter-- ) {

		echo "$counter\n";
	}

}
else {

	die("error: direction should be one of: up | down\n");
}

?>
