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
$invalid_nts = [];

foreach( str_split( $seq_str ) as $nt ) {

   echo "|";

   $nt = strToUpper( $nt );

   if( $nt == "A" or $nt == "a" ) { $rev_comp .= "T"; }
   elseif( $nt == "T" or $nt == "t" ) { $rev_comp .= "A"; }
   elseif( $nt == "C" or $nt == "c" ) { $rev_comp .= "G"; }
   elseif( $nt == "G" or $nt == "g" ) { $rev_comp .= "C"; }
   else {

      /* echo "invalid NT: $nt\n"; */

      if( !isset( $invalid_nts[$nt] ) ) {

         $invalid_nts[$nt] = 1;
      }
      else {

         $invalid_nts[$nt]++;
      }
   }
}


echo "\n";
echo "revc.: $rev_comp\n";

echo "Inlvalid NTs:\n";
print_r($invalid_nts);

?>
