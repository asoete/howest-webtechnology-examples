<?php

print_r( $argv );

# $seq = 'ATGCGATATTCGsdadljnads/jlbasgdb';

$nts = str_split($argv[1]);

# print_r( $nts );

# $a = 0;
$freq = [];

foreach( $nts as $nt ) {

	$nt = strToUpper( $nt );

	if( $nt != 'A' and $nt != 'T' ) {

		continue;
	}

	if( ! isset( $freq[$nt] ) ) {

		$freq[$nt] = 0;
	}

	$freq[$nt] += 1;
}

print_r($freq);

?>
