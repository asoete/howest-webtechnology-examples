<?php

/*
 * Add functionality to handle Upper and lower case
 * Round percentage to 2 decimal places
 */

$seq = $argv[1];
$seq_arr = str_split( $seq );

/*
$nt_A = 0;
$nt_T = 0;
$nt_C = 0;
$nt_G = 0;

foreach( $seq_arr as $nt ) {

   if( $nt == 'A' ) { $nt_A++; }
   elseif( $nt == 'T' ) { $nt_T++; }
   elseif( $nt == 'C' ) { $nt_C++; }
   elseif( $nt == 'G' ) { $nt_G++; }
}

echo "Stats:\n";

echo "\tA: $nt_A\n";
echo "\tT: $nt_T\n";
echo "\tC: $nt_C\n";
echo "\tG: $nt_G\n";
 */

$nt_freq = [];
$nt_tot = 0;

foreach( $seq_arr as $nt ) {


   $nt = strToUpper($nt);

   if( !isset($nt_freq[$nt]) ) {

      $nt_freq[$nt] = 0;
   }

   $nt_freq[$nt]++;
   $nt_tot++;
}


// Stats

echo "Stats:\n";

foreach( $nt_freq as $nt => $count ) {

   # echo "\t$nt: $count -> " . $count / $nt_tot. " %\n";

   $percentage = round( ( $count / $nt_tot ) * 100, 2 );
   echo "\t$nt: $count -> $percentage %\n";
}

// Graph

$max_width = 50;
foreach( $nt_freq as $nt => $count ) {

   $nr_of_chars = ( $count / $nt_tot ) * $max_width;

   echo "$nt: ";
   for( $i=0; $i<$nr_of_chars; $i++) {

      echo "=";
   }
   echo "\n";
}
