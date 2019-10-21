<?php

print_r( $argv );

if( ! isset( $argv[1] ) ) {

   die("Please specify a NT sequence\n");
}

$seq_string = $argv[1];
$seq_arr = str_split( $seq_string );
#print_r( $seq_arr );
$nt_freq = [];
$nt_tot = 0;

foreach( $seq_arr as $nt ) {

   # echo $nt . "\n";
   // store NT frequentie...
   if( ! isset( $nt_freq[$nt] ) ) {

      $nt_freq[$nt] = 0;
   }

   $nt_freq[$nt]++;
   $nt_tot++;
}

print_r( $nt_freq );

// Calc %
foreach( $nt_freq as $nt => $count ) {

   $pct = round( ( $count / $nt_tot ) * 100 );
   echo "% $nt: $pct " ;

   for( $i=0; $i < $pct; $i++ ) {

      echo "=";
   }
   echo "\n";
}

// Vis. % via Barplot
// A: =====
// T: ==
// ...
