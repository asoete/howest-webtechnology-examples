<?php

$x = $argv[1];

for( $i=$x; $i >= 0; $i-- ) {

   echo "$i\n";
}

echo "------- Incr by 4\n";

for( $i=$x; $i >= 0; $i -= 4 ) {

   echo "$i\n";
}
