<?php

/*
Create a script that generates the reverse complement of DNA string:

php dna-reverse-complement.php 'ATGCCGATAGGACTATGGACTATCTAGAGATCTATCAGAGAATATATCCGGGATAATCGGATATCGGCGATAC'

	orig.: ATGCCGATAGGACTATGGACTATCTAGAGATCTA...
	comp.: TACGGCTATCCTGATACCTGATAGATCTCTAGAT...
	
	orig.: ATGCCGATAGGACTATGGACTATCTAGAGA...
       	 |||||||||||||||||||||||||||||||||
	comp.: TACGGCTATCCTGATACCTGATAGATCTCT...

*/

$seq_str = $argv[1];
$seq_arr = str_split( $seq_str );
$translate = [
	'A' => 'T',
	'T' => 'A',
	'C' => 'G',
	'G' => 'C'
];

// orig seq
echo "orig: $seq_str\n";

// bonds
echo "      ";
for ($i = 0; $i < count($seq_arr) ; $i++) {

    echo "|";
}
echo "\n";

// reverse complement
echo "comp: ";
foreach( $seq_arr as $nt ) {

	/*
	if( $nt == 'A' ) {
		echo 'T';
	}
	elseif( $nt == 'T' ) {
		echo "A";
	}
	elseif( $nt == 'C' ) {
		echo "G";
	}
	elseif( $nt == 'G') {
		echo "C";
	}
	*/
	echo $translate[$nt];
}














