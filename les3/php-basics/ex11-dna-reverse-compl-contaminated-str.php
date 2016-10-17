<?php

// Specify the dna strand with spaces enclosed in quotes on the command line:
// php script.php 'ATCTgag aaggcct aatttxxcc'

# ------------------------------------------------------------------------------

echo "isset examples:\n ---------------------------\n";

print_r($argv);

if( isset( $argv[1] )) {

	echo "parameter received: $argv[1]\n";
}
else {

	echo "please specify DNA strand\n";
}

echo $fake_var;

if( isset( $fake_var ) ) {

	echo "\$fake_var exists\n";
}
else {

	echo "\$fake_var doesn't exist\n";
}


# ------------------------------------------------------------------------------

echo "store frequentie example: ----------------------\n";

$freq_store = [];
$values = [1,2,3,'i','z',4,2,'z',3,5,'z',4,'i','z'];

foreach( $values as $value ) {

	echo "\$value: $value\n";

	// if value exists, is set in fre_store -> add one to count
	if( isset( $freq_store[$value] ) ) {
		$freq_store[$value] = $freq_store[$value] + 1;
	}
	else {
		$freq_store[$value] = 1;	
	}
}

print_r( $freq_store );

# ------------------------------------------------------------------------------
// Store/report invalid nts

echo "Calc rev. compl. Report invalid chars: ---------------------------\n";

$dna_str = $argv[1];
$dna_arr = str_split( $dna_str );
$nr_nts = count( $dna_arr );

echo "orig: $dna_str\n";

# --------------------------------------------------------
# Create rev compl

echo "comp: ";
$discarded_nts = [];
foreach( $dna_arr as $nt ) {

	if( $nt == 'A' or $nt == 'a' ) { echo 'T'; }
	elseif( $nt == 'T' or $nt == 't') { echo 'A'; }
	elseif( $nt == 'C' or $nt == 'c' ) { echo 'G'; }
	elseif( $nt == 'G' or $nt == 'g') { echo 'C'; }
	else {

		echo '-';

		/*
		if( isset($discarded_nts[ $nt ]) ) {
			$discarded_nts[$nt]++;
		}
		else {
			$discarded_nts[$nt] == 1;
		}
		*/

		if( !isset( $discarded_nts[$nt] ) ) {
			$discarded_nts[$nt] = 0;
		}

		$discarded_nts[$nt]++;
	}
}
echo "\n\n";

echo "discarded nts:\n";
foreach( $discarded_nts as $key => $value ) {

	echo "\t$key occurred: $value times...\n";
}




























