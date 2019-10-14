<?php

if( !isset($argv[1]) ) {

   die("Please specify base.\n");
}

$base = $argv[1];

for( $rows=$base; $rows > 0; $rows-- ) {

   for( $star_counter=$rows; $star_counter > 0; $star_counter-- ) {

      echo "*";
   }

   echo "\n";
}

?>
