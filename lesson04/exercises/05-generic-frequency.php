<?php

$input_str = $argv[1];
$chars = str_split( $input_str );
$chars_total = count($chars);
$freq = [];

foreach( $chars as $char ) {

	if( ! isset($freq[$char]) ) {
		$freq[$char] = 0;
	}

	$freq[$char]++;
}

// asort( $freq );
// ksort( $freq );
// print_r( $freq );
// exit;

// print_r( $freq );
echo "STATS:\n";
foreach( $freq as $char => $count ) {

	$pct = ($count / $chars_total) * 100;
	echo "'$char' was found $count times: ($pct%)\n";
}

?>
