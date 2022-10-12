<?php

$array = [ 1,2,1,5,1,6,9,1,5,7 ];
$freq = [];

foreach( $array as $item ) {

	if( !isset($freq[$item]) ) {

		$freq[$item] = 0;
	}

	$freq[$item]++;
}

print_r($freq);
