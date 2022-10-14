<?php

$input = $argv[1] ?? die("provide a strand please\n");

$nts = str_split($input);

$freq = [];
$total = 0;

foreach($nts as $nt) {

	if( !isset( $freq[$nt]) ) {
		$freq[$nt] = 0;
	}
	$freq[$nt]++;
	$total++;
}

echo "STATS:\n";
foreach( $freq as $nt => $count ) {

	echo "\t$nt: $count - ". $count / $total * 100 ."%\n";
}


echo "GRAPH:\n";
foreach( $freq as $nt => $count ) {

	$prct = $count / $total * 100;

	echo "\t$nt: ";

	for( $counter = 0; $counter < $prct; $counter++ ) {

		echo "=";
	}
	echo "\n";
}
