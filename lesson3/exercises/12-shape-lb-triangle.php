<?php

if( ! isset( $argv[1] ) ) {

   die("Please specify width of base.\n");
}

$rows = $argv[1];

for( $rowcount=1; $rowcount <= $rows; $rowcount++ ) {

   // echo "$rowcount\n";

   for( $symbolcount=0 ; $symbolcount < $rowcount; $symbolcount++ ) {

      echo "*";
   }
   echo "\n";
}

?>
