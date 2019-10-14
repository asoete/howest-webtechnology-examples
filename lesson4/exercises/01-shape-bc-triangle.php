<?php
/*
     *
    ***
   *****
  *******
 *********
*/

if( !isset($argv[1]) ) {

   die("Please specify base size\n");
}

$base = $argv[1];
$stars2print = $base % 2;
$stars2print = 1;

if( $base % 2 == 0 ) {

   $stars2print = 2;
}
/* else { */

/*    $stars2print = 1; */
/* } */

$spaces2prt = $base / 2;

while( $stars2print <= $base ) {


   for( $space_cnt=0; $space_cnt < $spaces2prt; $space_cnt++ ) {

      echo " ";
   }

   for( $star_count=0; $star_count < $stars2print; $star_count++) {

      echo "*";
   }

   echo "\n";

   $spaces2prt--;
   $stars2print += 2;
}

?>
