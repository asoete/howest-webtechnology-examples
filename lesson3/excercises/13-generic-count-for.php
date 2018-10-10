<?php

$direction = $argv[1];
$from      = $argv[2];
$to        = $argv[3];

if( $direction == 'up') {

   for( $i=$from; $i <= $to; $i++ ) {

      echo "$i\n";
   }
}
elseif( $direction == 'down') {

   for( $i=$from; $i >= $to; $i-- ) {

      echo "$i\n";
   }
}
else{

   echo "ERROR! usage: $argv[0] (up|down) <from> <to>\n";
}
