<?php

# Count down from X to 0.
# Appendix: steps of 3

$start = $argv[1];

while( $start >= 0 ) {

	echo "$start\n";
	// $start = $start - 1;
	// $start -= 1;
	# $start--;
	
	// $start = $start - 3;
	$start -= 3;
}

?>
