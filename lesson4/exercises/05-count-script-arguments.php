<?php

$scriptname = array_shift( $argv );

$count = 0;

// count the items...

foreach( $argv as $arg ) {

   $count++;
}

echo $count . "\n";

?>
