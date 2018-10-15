<?php

$base = $argv[1] ?? 10;

for($row = 1; $row <= $base; $row++ ) {

   for( $stars = 0; $stars < $row; $stars++ ) {

      echo '*';
   }
   echo "\n";
}
