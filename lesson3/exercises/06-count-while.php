<?php

if( !isset($argv[1]) ) {

   die( "Please pass a number\n" );
}

$number = $argv[1];
$count = 0;
$count = 1;

echo "Count from $count -> $number\n";

while( $count <= $number ) {

   echo "$count\n";
   // $count = $count + 1;
   // $count += 1;
   $count++;
}

$start = $argv[1];
$stop = 0;
echo "Count from $number -> $stop\n";

while( $start >= 0 ) {

   echo "$start\n";
   $start--;
}

?>
