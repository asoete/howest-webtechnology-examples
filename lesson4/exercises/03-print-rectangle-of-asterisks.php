<?php

/*
if( isset($argv[1]) ) {

   $width = $argv[1];
}
else {

   $width = 10;
}

if( isset($argv[2]) ) {

   $height = $argv[2];
}
else {

   $height = $width;
}
*/

$width = $argv[1] ?? 10;
$height = $argv[2] ?? $width;

for( $j=0; $j < $height; $j++ ) {

   // print one line
   for( $i=0; $i < $width; $i++ ) {

      echo "*";
   }

   echo "\n";
}
