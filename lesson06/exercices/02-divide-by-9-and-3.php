<?php

if( ! isset($argv[1]) ) {
	die("number required\n");
	# echo "number required\n";
	# exit(1);
}

$input = $argv[1];

if( $input < 3 ) { echo "$input < 3\n" ;}
elseif( $input == 3 ) { echo "$input = 3\n" ;}
elseif( $input > 3 ) { echo "$input > 3\n" ;}

if( $input < 9 ) { echo "$input < 9\n" ;}
elseif( $input == 9 ) { echo "$input = 9\n" ;}
elseif( $input > 9 ) { echo "$input > 9\n" ;}

if( $input < 3 and $input < 9 ) {

	echo "$input < 3 and 9\n";
}

if( $input == 3 or $input == 9 ) {

	echo "$input = 3 or 9\n";
}

if( $input > 3 and $input > 9 ) {

	echo "$input > 3 and 9\n";
}

if( $input % 3 == 0 and $input %9 == 0 ) {

	echo "$input divisible by 3 AND 9\n";
}

if( $input % 3 == 0 or $input %9 == 0 ) {

	echo "$input divisible by 3 OR 9\n";
}
?>
