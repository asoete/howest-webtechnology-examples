<?php

$input = $argv;

$count = count($input);

for( $index = 1; $index < $count; $index++ ) {

	echo "pos $index: $input[$index]\n";
}

array_shift( $input );

// $array = ["index" => "value"];

foreach( $input as $index => $param ) {

	echo "pos $index : $param\n";
}
