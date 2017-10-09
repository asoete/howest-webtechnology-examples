<?php

print_r( $argv );
$script = array_shift( $argv );
print_r( $argv );

$count = 0;
foreach ($argv as $key => $value) {
   
   $count++; 
}

echo "Script ($script) received $count params...\n";
