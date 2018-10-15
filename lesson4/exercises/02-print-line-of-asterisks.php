<?php

/*
if( !isset($argv[1]) ) {

   echo "USAGE: $argv[0] <int>\n";
   exit;
}

if( isset($argv[1]) ) {

   $nr_of_stars = $argv[1];
}
else{

   $nr_of_stars = 10;
}
*/

$nr_of_stars = $argv[1] ?? 10;

for( $i=0; $i < $nr_of_stars; $i++ ) {

   echo '*';
}

echo "\n";
