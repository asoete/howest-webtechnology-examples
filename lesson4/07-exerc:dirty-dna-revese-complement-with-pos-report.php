<?php

/*
Create a script that generates the reverse complement of DNA string:
	'ATgCXCgAtAgg  ACTAtgGaCtA X  TCtA g aGaTc TatCAgAgaatAtiXXATCcgggATAATcggAtATCggCGaTaC'
	
	BONUS: Report positions of invalid chars (char X -> 12, 44)
*/

$seq_str = $argv[1];
$seq_arr = str_split( $seq_str );
$incor_chars = [];

echo "\n";

// orig seq
echo "orig: $seq_str\n";

// reverse complement
echo "comp: ";
foreach( $seq_arr as $pos_zero_based => $nt ) {

	$nt = strToUpper( $nt );

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
	else {
	
		if( !isset( $incor_chars[$nt] ) ) {
		
			$incor_chars[$nt] = [];
		}
		$incor_chars[$nt][] = $pos_zero_based + 1;
		// array_push( $incor_chars[$nt], $pos + 1 );
	}
}

// print_r( $incor_chars );

echo "\n";
print_r( $incor_chars );

echo "\n\nEncountered invalid chars (". count($incor_chars) ."):\n";
foreach ($incor_chars as $char => $pos_list) {

    echo "\t'$char' occured ".
    	count($pos_list) .
    	" times in seq: ".
    	implode(',', $pos_list ) .
    	"\n";
}

echo "\n";





/*
// bonds
echo "      ";
for ($i = 0; $i < count($seq_arr) ; $i++) {

    echo "|";
}
echo "\n";
*/







