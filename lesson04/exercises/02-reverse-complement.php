<?php

$input = $argv[1];
$input_nts = str_split( $input );
// $input_nts = str_split( $argv[1] );

echo "\n";
echo "orig: $input\n";

echo "      ";

$nts_count = count($input_nts );
for( $counter=0; $counter < $nts_count; $counter++) {

	echo "|";
}
echo "\n";


echo "comp: ";
foreach( $input_nts as $nt ) {

	if( $nt === "A" ) {echo "T";}
	elseif( $nt === "T" ) {echo "A";}
	elseif( $nt === "G" ) {echo "C";}
	elseif( $nt === "C" ) {echo "G";}
}

echo "\n";
