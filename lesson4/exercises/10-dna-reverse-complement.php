<?php

$seq = $argv[1];
$seq_arr = str_split( $seq );

// Naive/simple way


echo "orig.: $seq\n";
echo "comp.: ";


foreach( $seq_arr as $nt ) {

   if( $nt == 'A' ) { echo "T"; }
   elseif( $nt == 'T' ) { echo "A"; }
   elseif( $nt == 'C' ) { echo "G"; }
   elseif( $nt == 'G' ) { echo "C"; }
   # echo "NT: $nt\n";
}

echo "\n";

$comp = '';
$comp_arr = [];
$nt_count = 0;

foreach( $seq_arr as $nt ) {

   $nt_count++;

   if( $nt == 'A' )     { $comp .= "T"; } // $comp = $comp . "T"
   elseif( $nt == 'T' ) { $comp .= "A"; }
   elseif( $nt == 'C' ) { $comp .= "G"; }
   elseif( $nt == 'G' ) { $comp .= "C"; }

   // OR
   if( $nt == 'A' )     { $comp_arr[] = "T"; }
   elseif( $nt == 'T' ) { $comp_arr[] = "A"; }
   elseif( $nt == 'C' ) { $comp_arr[] = "G"; }
   elseif( $nt == 'G' ) { $comp_arr[] = "C"; }
}

print_r( $comp_arr );

echo "---------------\n";
echo "orig.: $seq\n";
echo "       ";
for( $i=0; $i < $nt_count; $i++ ) { echo '|'; }
echo "\n";
echo "comp.: $comp\n";
echo "comp.: " .implode('', $comp_arr ) ."\n";
