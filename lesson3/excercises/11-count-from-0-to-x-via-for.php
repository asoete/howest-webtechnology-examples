<?php

$x = $argv[1];

for( $i=0; $i <= $x; $i++ ) {

   echo "$i\n";
}

echo "------- Incr by 4\n";

for( $i=0; $i <= $x; $i += 4 ) {

   echo "$i\n";
}
