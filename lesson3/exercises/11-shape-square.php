<?php

if( !isset($argv[1]) ) {

   die("Please specify line dimensions.");
}

$width = $argv[1];
$height = $width;

if( isset($argv[2]) ) {

   $height = $argv[2];
}


for( $rows=0; $rows < $height; $rows++ ) {

   for( $count=0; $count < $width; $count++ ) {

      echo "*";
   }
   echo "\n";
}

?>
