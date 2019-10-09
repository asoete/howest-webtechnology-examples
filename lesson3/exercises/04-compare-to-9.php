<?php

// if( isset($argv[1]) ) {
// 
//    echo "We have a parameter\n";
// }
// else {
// 
//    echo "Please specify a parameter\n";
//    exit;
// }

$var = "hello world";
echo "$var\n";
var_dump( $var );
$var = false;
echo "$var\n";
var_dump( $var );
var_dump( $argv );
var_dump( 4>3 );
/* var_dump( ! false ); */

if( ! isset($argv[1]) ) {

   // echo "Please specify a parameter\n";
   // exit;
   die( "Please specify a parameter\n" );
}

$number = $argv[1];

// if( $number >= 9 ) {
// 
//    echo "$number is larger then or equal to 9\n";
// }

// $number != 9;

if( $number > 9 ) {

   echo "$number is larger then 9\n";
}
elseif( $number == 9 ) {

   echo "$number is equal to 9\n";
}
else {

   echo "$number is less then 9\n";
}

?>
