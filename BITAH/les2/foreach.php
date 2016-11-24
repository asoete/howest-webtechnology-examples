<?php
/*
$nr_el = count( $argv );

for( $index=0; $index < $nr_el; $index++ ) {

	echo "param $index -> $argv[$index]\n";
}
*/

$array = [
	'key1' => 'val1',
	'key2' => 'val2',
	'key3' => 'val3',
	'key4' => 'val5',
	'key5' => 'val5',
];

$counter = 0;
foreach( $array as $key => $value ) {

	echo "op pos $counter, key: $key, value: $value\n";
	$counter++;
}
