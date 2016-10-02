<?php

// while herhaal tot een conditie false is

/*
while( <conditie> ) {

	<voer deze block uit>
}

*/

$count = 10;

while( $count > 0 ) {

	echo "Countdown: $count\n";
	
	// $count = $count - 1;
	$count--; // '-> idem
}

echo "--------------------------------------\n";

// reverse count-down to "count-up"

$count = 1;

// while( $count < 11 ) {
while( $count <= 10 ) {

	echo "Count = $count\n";
	$count++;
}

echo "--------------------------------------\n";

// count from 0 - 30, step by 3

$count = 0;


while( $count <= 30 ) {

	echo "Count = $count\n";
	
	// $count = $count + 3
	$count += 3;
}

# ===================================================================

// FOR

echo "-----------------------------------------\n";

/*
for( <init counter>; <define condition>; <specify increment or decrement> ) {

	// execute this block
}
*/

for( $count = 0; $count <= 10; $count++ ) {

	echo "echo for count: $count\n";
}

echo "-----------------------------------------\n";

// count from 10 to 0 via for

for( $count = 10; $count >= 0; $count-- ) {

	echo "echo for count: $count\n";
}

echo "-----------------------------------------\n";

// count from 0 to 30, step=3, via for

for( $count = 0; $count <= 30; $count+=3 ) {

	echo "echo for count: $count\n";
}










