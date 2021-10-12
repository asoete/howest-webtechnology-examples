<?php

$input_str = $argv[1];
$nts = str_split( $input_str );
$nts_count = count($nts);

// $a = 0;
// $t = 0;
// $c = 0;
// $g = 0;

$freq = [];

foreach( $nts as $nt ) {

	if( ! isset( $freq[$nt] ) ) {
		$freq[$nt] = 0;
	}

	$freq[$nt]++;
}

echo "STATS:\n";
foreach( $freq as $nt => $count ) {
	echo "\t$nt: $count nts -> ". ($count / $nts_count ) * 100 . "%\n";
}

$max_width = 80;
echo "GRAPH:\n";
foreach( $freq as $nt => $count ) {

	echo "\t$nt: ";

	$nr_of_chars = ($count / $nts_count ) * $max_width;

	for( $counter=0; $counter < $nr_of_chars; $counter++ ) {
		echo "=";
	}

	echo "\n";
}

