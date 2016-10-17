<?php

// $string = $argv[1];
$string = strtolower( $argv[1] ); // make case insensitive 
$chars = str_split( $string );
$freq = [];
$nr_chars = 0;

foreach( $chars as $char ) {

	if( !isset($freq[$char]) ) {
		
		$freq[$char] = 0;
	}

	$freq[$char]++;
	$nr_chars++;
}

# ------------------------------------------------------------------------------

echo "Character frequenties:\n";

foreach( $freq as $char => $count ) {

	echo "char: `$char` occurres $count times = "
		. round( $count / $nr_chars * 100, 2 )
		. "% \n";
	
}

# ------------------------------------------------------------------------------

//print_r( $freq );
// sort( $freq ); // sort by value, loses key information
// asort( $freq ); // sort by value, keep keys.
arsort( $freq ); // sort reverse by value, keep keys
//print_r( $freq );


echo "Character frequenties by count:\n";

foreach( $freq as $char => $count ) {

	echo "char: `$char` occurres $count times = "
		. round( $count / $nr_chars * 100, 2 )
		. "% \n";
	
}

# ------------------------------------------------------------------------------

ksort($freq); // sort by key

echo "Character frequenties by character:\n";

foreach( $freq as $char => $count ) {

	echo "char: `$char` occurres $count times = "
		. round( $count / $nr_chars * 100, 2 )
		. "% \n";
	
}
