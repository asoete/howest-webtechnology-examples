<?php

$seq = $argv[1];
$seq_arr = str_split( $seq );

$orig;
$comp = '';
$comp_arr = [];
$nt_count = 0;
$invalid_nts = [];

foreach( $seq_arr as $nt ) {

   $valid_nt = true;

   if( $nt == 'A' )     { $comp_arr[] = "T"; }
   elseif( $nt == 'T' ) { $comp_arr[] = "A"; }
   elseif( $nt == 'C' ) { $comp_arr[] = "G"; }
   elseif( $nt == 'G' ) { $comp_arr[] = "C"; }
   else {

      // echo "Invalid NT encountered: $nt\n";
      # $valid_nt = false;

      # print_r( $invalid_nts );
      if( !isset($invalid_nts[$nt]) ) {

         $invalid_nts[$nt] = 0;
      }
      # print_r( $invalid_nts );

      $invalid_nts[ $nt ]++; // --> $invalid_nts[ $nt ] = $invalid_nts[ $nt ] +1 ;
      # print_r( $invalid_nts );
   }

   if( $valid_nt ) {

      $orig[] = $nt;
      $nt_count++;
   }

}

print_r($invalid_nts );

echo "orig.: " .implode('', $orig). "\n";
echo "       ";
for( $i=0; $i < $nt_count; $i++ ) { echo "|"; }
echo "\n";
echo "comp.: ". implode('', $comp_arr) ."\n";

foreach( $invalid_nts as $nt => $count ) {

   echo "Invalid NT: $nt -> $count\n";
}
