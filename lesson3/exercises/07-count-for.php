<?php


if( !isset($argv[1]) ) {

   die("Please specify the number to count down from.");
}

// Count UP from 0 to number

$max = $argv[1];

for( $count=0; $count <= $max; $count++ ) {

   echo "$count\n";
}


echo "count DOWN from argument till 0 using for";

$start = $argv[1];

for( $count=$start; $count >= 0; $count-- ) {

   echo "$count\n";
}


?>
