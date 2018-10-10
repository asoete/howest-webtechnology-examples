<?php

$x = $argv[1];

$counter = 0;

while( $counter <= $x ) {

   echo "$counter\n";
   $counter++;
}

echo "-------------------\n";

## Count in steps of 3

$counter = 0;

while( $counter <= $x ) {

   echo "$counter\n";
   $counter +=3;
}

