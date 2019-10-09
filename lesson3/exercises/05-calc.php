<?php

// if( !isset($argv[1]) ) {
// 
//    die("Please specify all arguments.\n");
// }
// 
// if( !isset($argv[2]) ) {
// 
//    die("Please specify all arguments.\n");
// }
// 
// if( !isset($argv[3]) ) {
// 
//    die("Please specify all arguments.\n");
// }

if( !isset($argv[1]) or !isset( $argv[2]) or !isset( $argv[3]) ) {

   die("Please specify all arguments.
      USAGE:
         php $argv[0] <operation> <num> <num>
   \n");
}

$operation = $argv[1];
$val1 = $argv[2];
$val2 = $argv[3];

if( $operation == 'add' ) {

   echo $val1 + $val2 . "\n";
}
elseif( $operation == 'subtract' ) {

   echo $val1 - $val2 . "\n";
}
elseif( $operation == 'multiply' ) {

   echo $val1 * $val2 . "\n";
}
elseif( $operation == 'divide' ) {

   echo $val1 / $val2 . "\n";
}
else {

   die("Invalid operation, only add, subtract, multiply and divide are allowed\n");
}


?>
