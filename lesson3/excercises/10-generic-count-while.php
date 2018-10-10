<?php

$direction = $argv[1];
$from      = $argv[2];
$to        = $argv[3];

if( $direction == 'up') {

   while( $from <= $to ) {

      echo "$from\n";
      $from++;
   }
}
elseif( $direction == 'down') {

   while( $from >= $to ) {

      echo "$from\n";
      $from--;
   }
}
else{

   echo "ERROR! usage: $argv[0] (up|down) <from> <to>\n";
}
