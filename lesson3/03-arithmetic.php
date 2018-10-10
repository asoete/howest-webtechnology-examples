<?php

echo 3 + 4;
$result = 3 + 4;
echo "\n$result";

echo 5 - 2;
echo "\n";

echo 5 * 2;
echo "\n";

echo 5 / 2;
echo "\n";

echo 5 ** 2;
echo "\n";

// returns rest value of a long tail division
echo 5 % 2;
echo "\n";
echo 11 % 3;
echo "\n";

echo "5 ** 2";
echo "\n";

echo 5 * (2 + 2);
echo "\n";

// Compare values

var_dump( 1 > 2 );
var_dump( 1 < 2 );
var_dump( 1 == 2 );
var_dump( 1 <= 2 );
var_dump( 2 <= 2 );

$var1 = 5;
$var2 = 2;

var_dump( $var1 == $var2 );

var_dump( '1' == 1 );
var_dump( '' == false );
var_dump( '' == 0 );

// Falsy
// - 0
// - false
// - ''


var_dump( 'abc123' == true );
// truethy
// - any number
// - any string
// - true

var_dump( 'abc123' === true );

// If Else

# if( "CONDITION HERE" ) {
if( true ) {

   echo "hello from the IF\n";
   echo "second statement\n";
}
else {

   echo "Hello from ELSE...\n";
}

if( false ) {

   echo "hello from the IF 2\n";
}
else {

   echo "Hello from ELSE 2...\n";
}


if( 3 < 2 ) {

   echo "x is smaller!\n";
}
elseif( 3 == 2 ) {

   echo "x equals to 2\n";
}
else {

   echo "x is larger\n";
}

/*
if( $cond1 ) {}

if($cond2) {}

if(...) {}
 */
