<?php

$base = $argv[1] ?? 10;

for($row = 1; $row <= $base; $row++ ) {

   $nr_spaces = $base - $row; // nr_stars == current row nr.

   for( $sp=0; $sp < $nr_spaces; $sp++ ) {

      echo ' ';
   }

   for( $stars = 0; $stars < $row; $stars++ ) {

      echo '*';
   }
   echo "\n";
}
