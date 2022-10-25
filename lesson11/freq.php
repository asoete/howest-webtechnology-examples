<?php

$input = "ATGCGATATCGGCWTGGC::CTAGAGCTC";

/* $freq = [ */
/* 	"A" => 0, */
/* 	"T" => 0, */
/* 	"G" => 0, */
/* 	"C" => 0, */
/* ]; */

$freq = [];

$nts = str_split( $input );

foreach( $nts as $nt ) {

	/* if( $nt == "A" ) { */
	/* 	$freq["A"]++; */
	/* } */
	/* elseif( $nt == "T" ) { */
	/* 	$freq["T"]++; */
	/* } */
	/* elseif( $nt == "G" ) { */
	/* 	$freq["G"]++; */
	/* } */
	/* elseif( $nt == "C" ) { */
	/* 	$freq["C"]++; */
	/* } */

	if( ! isset($freq[$nt]) ) {

		$freq[$nt] = 0;
	}

	$freq[$nt]++;
}

foreach( $freq as $nt => $count ) {

	echo "$nt's found: $count\n";
}

?>
