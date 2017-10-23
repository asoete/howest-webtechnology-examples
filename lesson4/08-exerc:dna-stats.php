<?php

/*
input: ATGCCGATAGGACTATGGACTATCTAGAGATCTATCAGAGAATATATCCGGGATAATCGGATATCGGCGATAC

   STATS:
      A: 24 nts -> 32.876712328767 %
      T: 18 nts -> 24.657534246575 %
      G: 18 nts -> 24.657534246575 %
      C: 13 nts -> 17.808219178082 %

   GRAPH:
      A: =================================
      T: =========================
      G: =========================
      C: ==================
*/


$seq_arr = str_split( $argv[1]);
$nt_counts = [];
// $count = count( $seq_arr );
$total_count = 0;

foreach( $seq_arr as $nt ) {

	$total_count++;
	if( !isset($nt_counts[$nt]) ) {
	
		$nt_counts[$nt] = 0;
	}
	$nt_counts[$nt]++;
}

// print_r( $nt_counts);

echo "STATS:\n";

foreach( $nt_counts as $nt => $count ) {

	echo "\t$nt: $count -> ". ($count / $total_count * 100) ."%\n";
}


echo "\nGRAPH:\n";

foreach( $nt_counts as $nt => $count ) {

	echo "\t$nt: ";
	for ($counter = 0; $counter < ($count / $total_count * 100) ; $counter++) {
	    echo "=";
	}
	echo "\n";
}

















