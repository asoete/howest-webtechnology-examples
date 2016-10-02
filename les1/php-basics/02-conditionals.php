<?php

//if( /*conditie */ ) {

	/* code wanneer conditie == true */
//}


$var = 2;

/*
if( $var % 2 == 0 ) {

	echo "$var is even\n";
}

if( $var % 2 != 0 ) {

	echo "$var is oneven\n";
}
*/

$var = 6;

if( $var % 2 == 0 ) {

	echo "$var is even\n";
}
else {

	echo "$var is oneven\n";
}

# --------------------------------------------------------

if( $var % 2 == 0 ) {

	echo "$var is deelbaar door 2\n";
}
elseif( $var % 3 == 0 ) {

	echo "$var is deelbaar door 3\n";
}
else {

	echo "$var is niet deelbaar door 2 of 3\n";
}

# --------------------------------------------------------
# Compare

/*
== -> gelijk aan
!= -> niet gelijk aan
>  -> groter dan
<  -> kleiner dan
>= -> groter of gelijk aan
<= -> kleiner of gelijk aan.
*/

$var = 10;

// print of $var groter, kleiner of gelijk is aan 10

if( $var < 10 ) {
	echo "$var is kleiner dan 10\n";
}
elseif( $var == 10 ) {
	echo "$var is exact 10\n";
}
//elseif( $var > 10 ) {
else {
	echo "$var is groter dan 10\n";
}

// Type juggeling

echo '2 is een nummer' + 15 . "\n";

if( '1' == 1 ) {

	echo "string 1 == int 1\n";
}

if( '1 sdgd' == true ) {

	echo "string 1 == true\n";
}

if( '1' === 1 ) {

	echo "string 1 == int 1\n";
}
else {

	echo "string 1 !== int 1\n";
}

if( '1 sdgd' === true ) {

	echo "string '1 sdgd' == true\n";
}
else {

	echo "string '1 sdgd' !== true 1\n";
}

// Multiple conditions


if( true and false ) {

	echo "impossible...\n";
}
else {

	echo "true and false is false";
}

// -------------------------------------------------------------

$var = 9;

if( $var % 2 == 0 and $var % 3 == 0 ) {

	echo "$var is deelbaar door 2 EN 3\n";
}
else {

	echo "$var is niet deelbaar door 2 EN 3\n";
}

if( $var % 2 != 0 and $var % 3 == 0 ) {

	echo "$var is deelbaar door 3 MAAR niet door 2\n";
}
else {

	echo "$var is niet enkel deelbaar door 3\n";
}

