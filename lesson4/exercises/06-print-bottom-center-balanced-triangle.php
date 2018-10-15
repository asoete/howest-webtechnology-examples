<?php

// Bottom + center

$base = $argv[1] ?? 10;
$stars = $base % 2; // init $stars with 0 or 1 depending if $base is even or odd
$stars = 1;
$spaces = $base / 2;

while( $stars <= $base ) {

   for( $space_c=0; $space_c < $spaces; $space_c++ ) {

      echo ' ';
   }

   for( $star_c=0; $star_c < $stars; $star_c++ ) {

      echo '*';
   }

   echo "\n";

   $stars += 2;
   $spaces--;
}
