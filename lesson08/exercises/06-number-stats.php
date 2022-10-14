<?php

$input = $argv;
array_shift( $input );

// min

$min = $input[0];
$max = $input[0];
$sum = 0;
$nrof_items = 0;
$stats = [];

foreach( $input as $index => $value ) {

	echo "pos: $index ; num: $value\n";

	if( $value < $min ) {
		$min = $value;
	}

	if( $value > $max ) {
		$max = $value;
	}

	$sum += $value;
	$nrof_items++;

	if( ! isset($stats[$value]) ) {
		$stats[$value] = 0;
	}
	$stats[$value]++;
}

echo "min: $min\n";
echo "max: $max\n";
echo "sum: $sum\n";
echo "nrof_items: $nrof_items\n";
echo "avg: " . $sum / $nrof_items . "\n";
echo "avg: " . round( $sum / $nrof_items, 2 ) . "\n";

foreach( $stats as $num => $freq ) {

	echo "we found $num -> $freq times\n";
}


for( $index = $nrof_items -1; $index >= 0; $index-- ) {

	echo "$input[$index]  ";
}
echo "\n";

sort($input);
print_r($input);

