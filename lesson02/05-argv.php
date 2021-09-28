<?php

# print_r( $argv );

if( ! isset($argv[1]) or ! isset($argv[2]) ) {

	echo "No values\n";
	exit;
}

$num1 = $argv[1];
$num2 = $argv[2];

echo $num1 + $num2 . "\n";
