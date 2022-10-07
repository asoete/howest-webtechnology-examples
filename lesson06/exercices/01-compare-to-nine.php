<?php

// print_r($argv);

$input = $argv[1];

if( $input < 9 ) {

	echo "$input is < 9\n";
}
elseif( $input == 9 ) {

	echo "$input is = 9\n";
}
// elseif( $input > 9 ) {
else {

	echo "$input is > 9\n";
}

if( $input % 9 == 0 ) {

	echo "$input can be divided by 9\n";
}
else {

	echo "unable to divide $input by 9...\n";
}

?>
