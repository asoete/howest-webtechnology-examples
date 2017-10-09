<?php

// PHP CODE
# COMMENT 2
/* BLOCK/INLINE COMMENTS */

/*
$var_name = 'put into var_name';
echo "hello world\n$var_name \$var_name \n\n";
echo "\tindented string\n";
echo 'hello world $var_name';
*/

$int = 1;
$float = 1.23;
$string = "some text";
$bool = true or false;

if( 1 < 2 ) {

	// execute if condition -> true
}
else {

	// execute if condition is not true (= false)
}
/*
if( $var % 2 != 0 ) {

	// execute if not equal to 0
}
*/
/*
if( $cond1 == true ) {

}
else if( $cond2 == true ) {

}
else if( $cond3 == true ) {

}
// ....
else {

}
*/

/*
if( 1 == true ) { // Must have the same value after type conversion

	echo "Number 1 equals boolean true...\n";
}

if( 1 === true ) { // must have the same type (bool, int, ... AND value)

	echo "Number 1 not equal to boolean true...\n";
}

if( ($var % 2 == 0 ) and ($var % 5 == 0) ) {

	echo "$var can be devided by 2 and 5\n";
}

if( ($var % 2 == 0 ) or ($var % 5 == 0) ) {

	echo "$var can be devided by 2 and 5\n";
}
*/

/*
true and true  -> true
true and false -> false
false and false -> false

true or true -> true
true or false -> true
false or true -> true
false or false -> false
*/

/*
string, int, float: ==
int, float: >, <, >=, <=
*/

/*
$counter=0;
while( $counter < 10 ) {

	echo "\$counter ($counter) is still smaller then 10\n";
	//	$counter = $counter + 1' // $counter + 3;
	// $counter += 1; // $counter += 3;
	$counter++;
}


for( $c=1; $c <= 20; $c++ ) {

	if( $c % 5 == 0 ) {
	
		echo "$c can be devided by 5\n";
	}
}
*/

print_r( $argv );

echo "argument 1 -> $argv[1]\n";

$number = $argv[1];

echo "Number = $number\n";










?>
