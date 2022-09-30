<?php

# while( $cond ) {
# 
# 	// execute this block as long as $cond == true;
# }

$counter = 1;
while( $counter <= 10 ) {

	echo "\$counter == $counter \n";
	# $counter = $counter + 1;
	# $counter += 1;
	# $counter += 2;
	$counter++;
}

$counter = 100;

while( $counter > 0 ) {

	echo $counter . "\n";

	if( $counter % 2 == 0 ) {

		echo "\t num is even...\n";
	}

	$counter -= 5;
}

?>
