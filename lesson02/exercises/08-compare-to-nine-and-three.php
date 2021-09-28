<?php

$input = $argv[1];

if( $input < 3 ) {
	echo "$input -lt 3\n";
}
elseif( $input == 3 ) {
	echo "$input == 3\n";
}
elseif( $input > 3 and $input < 9 ) {
	echo "$input between 3 and 9\n";
}
elseif( $input == 9 ) {
	echo "$input == 9\n";
}
else {
	echo "$input -qt 9\n";
}

if( $input % 3 == 0 ) {
	echo "we can divide $input by 3\n";
}
else {
	echo "we can't divide $input by 3\n";
}
