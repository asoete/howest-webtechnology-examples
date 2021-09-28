<?php

$var = 2;

if( $var > 10 ) {

	// if condition evaluates to TRUE, execute!
	echo "condition evaluated to true!\n";
}
else {

	echo "condition evaluated to FALSE...\n";
}

if( $var < 10 ) {
	// if condition evaluates to TRUE, execute!
	echo "\$var is less then 10\n";
}
elseif( $var == 10 ) {
	echo "\$var is 10\n";
}
else {
	echo "\$var is larger then 10\n";
}
?>
