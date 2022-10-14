<?php

$input = $argv[1] ?? die("usage: $argv[0] <ATGC>\n");

echo "orig: $input\n";

$input_arr = str_split($input);

$nr_nts = count($input_arr);

echo "      ";
for( $pipes = 0; $pipes < $nr_nts; $pipes++ ) {

	echo "|";
}
echo "\n";

echo "comp: ";
foreach( $input_arr as $nt ) {

	#echo "NT: $nt\n";
	
	if( $nt == "A" ) { echo "T"; }
	elseif( $nt == "T" ) { echo "A"; }
	elseif( $nt == "C" ) { echo "G"; }
	elseif( $nt == "G" ) { echo "C"; }
}
