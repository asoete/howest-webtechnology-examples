<?php

if( !isset($argv[1]) ) {

   die("Please specify DNA sequence.\n");
}

$seq_str = $argv[1];

// $seq_arr = str_split( $seq_str );
// foreach( $seq_arr as $nt ) {

echo "orig.: $seq_str\n";
echo "revc.: ";

foreach( str_split( $seq_str ) as $nt ) {

   // echo "nt: $nt\n";

   if( $nt == "A" ) { echo "T"; }
   if( $nt == "T" ) { echo "A"; }
   if( $nt == "C" ) { echo "G"; }
   if( $nt == "G" ) { echo "C"; }
}

echo "\n";

?>
