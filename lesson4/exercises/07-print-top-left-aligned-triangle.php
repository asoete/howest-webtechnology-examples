<?php

$base = $argv[1] ?? 10;

for( $row=$base; $row > 0; $row-- ) {

   for( $stars=0; $stars < $row; $stars++ ) {

      echo "*";
   }

   echo "\n";
}
