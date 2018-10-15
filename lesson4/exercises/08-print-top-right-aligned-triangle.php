<?php

$base = $argv[1] ?? 10;
$spaces = 0;

for( $row=$base; $row > 0; $row-- ) {

   for( $spc=0; $spc < $spaces; $spc++ ) {

      echo ' ';
   }
   $spaces++;

   for( $stars=0; $stars < $row; $stars++ ) {

      echo "*";
   }

   echo "\n";
}
