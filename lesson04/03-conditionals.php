<?php

// if( /* condition */ ) {
// 
// 	// all code within {} will be executed when the condition
// 	// is true
// }

if( ! false ) { 

	echo "cond == true\n";
	echo "cond == true\n";
}

$var = 2;

if( $var > 10 and $var < 100 ) {

	echo "number is between 10 and 100 (non incl)\n";
}
else {

	// Execute when if test == false
}

// is $var < 10 -> print 
// is $var == 10 -> print
// is $var > 10 -> print

if( $var < 10 ) {

	echo "$var is < 10\n";
}
elseif( $var == 10 ) {

	echo "$var == 10\n";
}
elseif( $var == 12 ) {

	echo "$var == 12\n";
}
elseif( $var == 14 ) {

	echo "$var == 14\n";
}
else {

	echo "$var is > 10";
}

?>
