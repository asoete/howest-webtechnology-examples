<?php

/*
Create a script that:

    receives a number from the command line
    counts from zero to this number
    counts back from this number to zero
    counts from zero to the number in steps of three
*/

$number = $argv[1];

echo "Count 0 -> $number (for)\n";

for( $i=0; $i <= $number; $i++) {

	echo "\t$i\n";
}

# ------------------------------------------------------------------------------

echo "Count 0 -> $number (while)\n";

$count = 0;

while( $count <= $number ) {

	echo "\t$count\n";
	$count++;
}

# ------------------------------------------------------------------------------

echo "Count $number -> 0 (for)\n";

for( $i=$number; $i >= 0; $i-- ) {

	echo "\t$i\n";
}

# ------------------------------------------------------------------------------

echo "Count $number -> 0 (while)\n";

$counter = $number;

while( $counter >= 0 ) {

	echo "\t$counter\n";
	$counter--;
}

# ------------------------------------------------------------------------------

echo "Count 0 -> $number by 3 (for)\n";

for( $i=0; $i <= $number; $i+=3) {

	echo "\t$i\n";
}

# ------------------------------------------------------------------------------

echo "Count 0 -> $number by 3 (while)\n";

$count = 0;

while( $count <= $number ) {

	echo "\t$count\n";
	$count += 3;
}
