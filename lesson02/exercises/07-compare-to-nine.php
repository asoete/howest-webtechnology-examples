<?php

$num = 90;
$input = $argv[1];

if( $input < $num ) {

	echo "$input is less then $num\n";
}
elseif( $input == $num ) {

	echo "$input is $num\n";
}
else {

	echo "$input is greater then $num\n";
}
