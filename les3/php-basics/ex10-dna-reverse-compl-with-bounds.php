<?php

$dna_str = $argv[1];
$dna_arr = str_split( $dna_str );
$nr_nts = count( $dna_arr );
$nr_nts = strlen( $dna_str );

echo "orig: $dna_str\n";
echo '      ';

for( $i = 0; $i < $nr_nts; $i++ ) {

	echo '|';
}

echo "\n";

# --------------------------------------------------------
# Create rev compl

echo "comp: ";
foreach( $dna_arr as $nt ) {

	if( $nt == 'A') { echo 'T'; }
	if( $nt == 'T') { echo 'A'; }
	if( $nt == 'C') { echo 'G'; }
	if( $nt == 'G') { echo 'C'; }
}
echo "\n";
