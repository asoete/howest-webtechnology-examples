<?php

$arr = [ 1, 2 ,3 ,4, 5 ];

print_r( $arr );

// count -> for

foreach( $arr as $value ) {

	echo "$value\n";
}

$assoc_arr = [
	"one" => "een",
	"two" => "twee",
	"three" => "drie",
];

foreach( $assoc_arr as $eng => $dutch ) {

	echo "eng: $eng; dutch: $dutch\n";
}

// foreach( $arr as $key => $value ) {}

?>
