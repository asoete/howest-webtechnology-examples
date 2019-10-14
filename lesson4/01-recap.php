<?php

// VALID PHP CODE
# COMMENT TYPE2
/* type 3 */

echo "\tHello World\n";
echo '\tHello World\n' . "\n";

$var = "value";

$string = "hello world";
$int = 123;
$float = 123.2344;
$bool = true or false;

var_dump( $bool );

if( $cond == true ) {

   // this code will be executed
}
elseif( ... ) { ... }
elseif( ... ) { ... }
elseif( ... ) { ... }
else {

   // if == false
}

// loops

while( $cond == true ) {

   // exec as long as $cond == true
}

$value = 0;
while( $value < 10 ) {

   echo "$value\n";
   /* $value = $value + 1; */
   /* $value += 1; */
   $value++;
}

for( $value=0; $value < 10; $value++ ) {

   echo "$value\n";
}

?>
