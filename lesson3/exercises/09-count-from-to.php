<?php

// php count-form-to.php 10 20
// php count-form-to.php 30 20

if( !isset($argv[1]) or !isset($argv[2]) ) {

   die("please specify two numbers\n");
}

$start = $argv[1];
$stop = $argv[2];

if( $start <= $stop ) {

   for( $count=$start; $count <= $stop; $count++ ) {

      echo "$count\n";
   }
}
else {

   for( $count=$start; $count >= $stop; $count-- ) {

      echo "$count\n";
   }
}

?>
