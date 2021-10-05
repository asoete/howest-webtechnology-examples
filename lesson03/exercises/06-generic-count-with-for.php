<?php

$direction = $argv[1];
$start = $argv[2];
$end = $argv[3];

if( $direction == "up") {

	echo "Count up\n";

	for( $counter = $start; $counter <= $end; $counter++ ) {

		echo "$counter\n";
	}

}
elseif( $direction == "down" ) {

	echo "Count down\n";

	for( $counter = $start; $counter >= $end; $counter-- ){

		echo "$counter\n";
	}
}
else {

	echo "Invalid direction: '$direction', should be one of up / down...\n";
}

?>
