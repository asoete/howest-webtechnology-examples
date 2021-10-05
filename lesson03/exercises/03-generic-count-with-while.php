<?php

$direction = $argv[1];
$start = $argv[2];
$end = $argv[3];

if( $direction == "up") {

	echo "Count up\n";

	while( $start <= $end ) {

		echo "$start\n";
		$start++;
	}

}
elseif( $direction == "down" ) {

	echo "Count down\n";
	while( $start >= $end ) {

		echo "$start\n";
		$start--;
	}
}
else {

	echo "Invalid direction: '$direction', should be one of up / down...\n";
}

?>
