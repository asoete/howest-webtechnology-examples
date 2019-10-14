<?php

if( !isset($argv[1]) ) {

   die("Please specify DNA sequence.\n");
}

$seq_str = $argv[1];

// $seq_arr = str_split( $seq_str );
// foreach( $seq_arr as $nt ) {

echo "orig.: $seq_str\n";
echo "       ";

$rev_comp = '';
$count = 0;

foreach( str_split( $seq_str ) as $nt ) {

   // echo "nt: $nt\n";

   if( $nt == "A" ) { $rev_comp .= "T"; }
   if( $nt == "T" ) { $rev_comp .= "A"; }
   if( $nt == "C" ) { $rev_comp .= "G"; }
   if( $nt == "G" ) { $rev_comp .= "C"; }

   $count++;
}

for( $i=0; $i < $count; $i++ ) {

   echo "|";
}


echo "\n";
echo "revc.: $rev_comp\n";

?>
