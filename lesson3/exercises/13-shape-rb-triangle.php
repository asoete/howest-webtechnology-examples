<?php

if( ! isset( $argv[1] ) ) {

   die("Please specify width of base.\n");
}

$rows = $argv[1];

for( $rowcount=1; $rowcount <= $rows; $rowcount++ ) {

   // for( $spaces2print=$rows - $rowcount; $spaces2print > 0 ; $spaces2print-- ) {

   //    echo " ";
   // }

   for( $spaces=$rowcount; $spaces < $rows; $spaces++ ) {

      echo " ";
   }


   for( $symbolcount=0 ; $symbolcount < $rowcount; $symbolcount++ ) {

      echo "*";
   }
   echo "\n";
}

?>
