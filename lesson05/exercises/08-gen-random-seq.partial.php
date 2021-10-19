<?php

// $list = [ 'A', 'T', 'G', 'C' ];

$input = "ATGCUXYZ";
$input = "ATGC";
$list = str_split( $input );
# echo count( $list );
$upper_index = count($list) -1;

# print_r($list);

for( $i=0; $i<250; $i++ ) {

	$random_number = rand(0, $upper_index);
	// echo $random_number ."\n";
	echo $list[$random_number];
}

?>
