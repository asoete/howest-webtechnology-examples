<?php

$input = $argv[1] ?? die("usage: $argv[0] <ATGC>\n");

// echo "orig: $input\n";

$input_arr = str_split($input);
$nr_nts = 0;
$clean_input = "";
$clean_output = "";

$freq = [];

foreach( $input_arr as $nt ) {

	if( $nt == "A" or $nt == "a" ) { 
		$clean_input .= $nt;
		$clean_output .= "T";
		$nr_nts++;
	}
	elseif( $nt == "T" or $nt == "t" ) { 
		$clean_input .= $nt;
		$clean_output .= "A";
		$nr_nts++;
	}
	elseif( $nt == "C" or $nt == "c" ) { 
		$clean_input .= $nt;
		$clean_output .= "G";
		$nr_nts++;
	}
	elseif( $nt == "G" or $nt == "g" ) { 
		$clean_input .= $nt;
		$clean_output .= "C";
		$nr_nts++;
	}
	else {

		if( !isset($freq[$nt]) ) {
			$freq[$nt] = 0;
		}
		$freq[$nt]++;
	}
}

echo $clean_input . "\n";
for( $pipes = 0; $pipes < $nr_nts; $pipes++ ) {

	echo "|";
}
echo "\n";
echo $clean_output . "\n";

foreach($freq as $nt => $count ) {

	echo "$nt seen $count times...\n";
}
