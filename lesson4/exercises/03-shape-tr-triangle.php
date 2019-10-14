<?php

if( !isset($argv[1]) ) {

   die("Please specify base.\n");
}

$base = $argv[1];

for( $rows=$base; $rows > 0; $rows-- ) {

   $spaces2print = $base - $rows;
   for( $spaces=0; $spaces < $spaces2print; $spaces++) {

      echo " ";
   }

   for( $star_counter=$rows; $star_counter > 0; $star_counter-- ) {

      echo "*";
   }

   echo "\n";
}

?>
