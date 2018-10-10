<?php

$nr_params = count($argv);

print_r( $argv );
echo "Count = $nr_params\n";

echo "Number of parameters: " . ( $nr_params - 1 ) . "\n";

for( $i=1; $i < $nr_params; $i++ ) {

   // echo "$i\n";
   echo "\t Position $i: $argv[$i]\n";
}
