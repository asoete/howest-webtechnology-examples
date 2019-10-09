<?php

// Count UP or down from parameter based on first argument
// php count-up-or-down.php up 10
// php count-up-or-down.php down 10

if( !isset($argv[1]) ) {

   die("please specify up or down\n");
}
$direction = $argv[1];

if( !isset($argv[2]) ) {

   die("please specify number\n");
}
$number = $argv[2];

if( $direction == "up" ) {

   for( $count=0; $count <= $number; $count++ ) {

      echo "$count\n";
   }
}
elseif( $direction == "down" ) {

   for( $count=$number; $count >= 0; $count-- ) {

      echo "$count\n";
   }
}
else {

   die("Direction should be up or down, not $direction...\n");
}

?>
