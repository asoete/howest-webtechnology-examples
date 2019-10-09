<?php

// Conditionals

if( 4 > 3 ) {

   // exec all in {} when if evaluates to true

   echo "If block is executed\n";
}
elseif( 3 == 3 ) {

   // exec
}
elseif( true ) {

   // exec
}
else {

   echo "Else block is executed\n";
}

if ( isset($var) ) {

   echo "\$var is defined\n";
}

// var_dump: print info about variables/expressions
// ! -> flip boolean from true -> false and false -> true
var_dump( !true );

?>
