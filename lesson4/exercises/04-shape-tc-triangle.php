<?php

if( !isset($argv[1]) ) {

   die("Please specify base.\n");
}

$base = $argv[1];
$max_rows = $base / 2;

for( $rows=$max_rows; $rows > 0; $rows-- ) {

   $spaces2print = $max_rows - $rows;
   for( $spaces=0; $spaces < $spaces2print; $spaces++) {

      echo " ";
   }

   for( $star_counter=$rows*2; $star_counter > 0; $star_counter-- ) {

      echo "*";
   }

   echo "\n";
}

?>
