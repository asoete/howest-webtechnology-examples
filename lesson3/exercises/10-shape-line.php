<?php

if( !isset($argv[1]) ) {

   die("Please specify line dimensions.");
}

$width = $argv[1];

for( $count=0; $count < $width; $count++ ) {

   echo "*";
}
echo "\n";

// ----

$count=0;
while( $count < $width ) {

   echo "*";
   $count++;
}
echo "\n";

?>
