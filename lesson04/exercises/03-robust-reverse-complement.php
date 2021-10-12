<?php

$input = $argv[1];
$input_nts = str_split( $input );

echo "\n";

// original input
echo "orig: $input\n";

// Bounds
echo "      ";
$nts_count = count($input_nts );
for( $counter=0; $counter < $nts_count; $counter++) {
	echo "|";
}
echo "\n";

// Complement

$invalid_nts = [];

echo "comp: ";
foreach( $input_nts as $nt ) {

	$nt = strtoupper($nt);

	// if( $nt === "A" or $nt === "a" ) {echo "T";}
	// elseif( $nt === "T" or $nt === "t" ) {echo "A";}
	// elseif( $nt === "G" or $nt === "g" ) {echo "C";}
	// elseif( $nt === "C" or $nt === "c" ) {echo "G";}

	if( $nt === "A") {echo "T";}
	elseif( $nt === "T") {echo "A";}
	elseif( $nt === "G") {echo "C";}
	elseif( $nt === "C") {echo "G";}
	elseif( $nt === " " ) {echo " ";}
	else {
		echo "+";
		if( ! isset($invalid_nts[$nt]) ) {
			$invalid_nts[$nt] = 0;
		}
		$invalid_nts[$nt]++;
	}
}

echo "\n";

// print_r($invalid_nts);
foreach( $invalid_nts as $sym => $count ) {

	echo "Invalid symbol $sym was found $count times\n";
}

