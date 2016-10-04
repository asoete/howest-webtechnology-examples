<?php

/*
Create a script that generates the reverse complement of DNA string:
*/

$dna_str = $argv[1];

$dna_arr = str_split($dna_str);

//echo "$dna_str\n";
//print_r( $dna_arr );

$rev_comp = '';
foreach( $dna_arr as $nt ) {

	if( $nt == 'A' ) { $rev_comp .= 'T'; } // => $rev_comp = $rev_comp . 'T';
	elseif( $nt == 'T' ) { $rev_comp .= 'A'; }
	elseif( $nt == 'C' ) { $rev_comp .= 'G'; }
	elseif( $nt == 'G' ) { $rev_comp .= 'C'; }
	else { die( "ERROR: unknown NT: $nt\n" );} // die = throw error...
}

echo "orig: $dna_str\n";
echo "comp: $rev_comp\n";
