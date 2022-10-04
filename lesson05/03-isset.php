<?php

$present = 1;

var_dump( isset( $non ) );
var_dump( isset( $present ) );

print_r( $argv );


var_dump( isset( $argv[1] ) );

$num = 10;
if( isset( $argv[1]) ) {

	$num = $argv[1];
}

$num = $argv[1] ?? 10;

echo "Our \$num == $num\n";

?>
