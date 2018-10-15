<?php

$base = $argv[1] ?? 10;
$stars_to_print = $base;

while($stars_to_print > 0) {

   $spaces_to_print = ( $base - $stars_to_print ) / 2;

   for( $spc = 0; $spc < $spaces_to_print; $spc++ ) {

      echo ' ';
   }

   for( $stc = 0; $stc < $stars_to_print; $stc++ ) {

      echo '*';
   }
   $stars_to_print -= 2;

   echo "\n";


}
