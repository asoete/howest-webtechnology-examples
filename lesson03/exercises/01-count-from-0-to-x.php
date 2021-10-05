<?php

# Count from 0 to X
# Appendix: steps of 3

$goal = $argv[1];
$counter = 0;

while( $counter <= $goal ) {

	echo "$counter \n";
	/* $counter++; */
	$counter += 3;
}

?>
