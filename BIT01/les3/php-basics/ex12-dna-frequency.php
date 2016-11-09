<?php

// Calculate the frequentie of NTs in a dna string.

$dna_str = $argv[1];
$dna_arr = str_split( $dna_str );
$freq_store = [];
$count = 0;

foreach( $dna_arr as $nt ) {

	if( !isset( $freq_store[$nt] ) ) {

		$freq_store[$nt] = 0;
	}

	$freq_store[$nt]++;
	$count++;
}

foreach( $freq_store as $nt => $freq ) {

	echo "$nt occurred: $freq times. -> " . round( $freq / $count * 100, 2) . "%\n";
}
