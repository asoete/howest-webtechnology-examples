<?php

$filename = array_shift($argv);
/* print_r($argv); */

$nr_of_items = count( $argv );
$min = $argv[0];
$max = $argv[0];
$sum = 0;
$freq = [];

echo "The numbers received:\n";

for( $index = 0; $index < $nr_of_items; $index++ ) {

	$num = $argv[$index];

	echo "num at index $index = $num\n";

	if( $num < $min ) {
		$min = $num;
	}

	if( $num > $max ) {
		$max = $num;
	}

	$sum += $num;

	if( ! isset( $freq[$num] ) ) {

		$freq[$num] = 0;
	}

	$freq[$num]++;
}

echo "Min in list: $min\n";
echo "Max in list: $max\n";
echo "Avg. in list: " . round($sum / $nr_of_items, 2 ) . "\n";

// print_r($freq);
foreach( $freq as $num => $count ) {

	echo "$num was found $count times\n";
	echo "\t $num -> $count\n";
}

// print the args reversed

// for( $index = $nr_of_items -1; $index >=0; $index -- )
// {...}

sort( $argv );

print_r($argv);
