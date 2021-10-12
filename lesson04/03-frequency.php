<?php

$freq = [];

// A

$freq['A'] = 1;

// T
$freq['T'] = 1;

// A

$freq['A'] = $freq['A'] + 1;
$freq['A']++;


print_r( $freq );

// foreach( $arr as $key => $value ) {}

foreach( $freq as $sym => $count ) {

	echo "\$sym = $sym and \$count = $count \n";
}
