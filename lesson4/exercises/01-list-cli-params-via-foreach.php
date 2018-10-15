<?php

// List all the parameters provided on the CLI

//$argv;

print_r($argv);

$scriptname = array_shift( $argv );

print_r($argv);

echo "Params for the script '$scriptname': \n";
$counter = 0;
foreach( $argv as $param ) {

   $counter++;
   echo "Some cli param at pos $counter: $param\n";
}
