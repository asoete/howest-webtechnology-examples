<?php

$x = $argv[1];

if( $x < 9 and $x < 3 ) {

   echo "X ($x) is less then 9 AND 3\n";
}
elseif( $x == 9 ) {

   echo "X ($x) is equal to 9\n";
}
elseif( $x == 3 ) {

   echo "X ($x) is equal to 3\n";
}
elseif( $x > 9 ) {
   echo "X ($x) is larger then 9 and 3 \n";
}

if( $x % 3 == 0 and $x % 9 == 0 ) {

   echo "X ($x) is divisible by 9 and 3 \n";
}
