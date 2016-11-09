<?php

/*
Create a script that prints a left + bottom balanced triangle of asterisks with base defined by parameter. Ex.:
*
**
***
****
*****
******
*******
********
*/

$base = $argv[1];

for( $row=1; $row < $base; $row++ ) {

	for( $nr_ast=$row	; $nr_ast > 0; $nr_ast-- ) {

		echo "*";
	}
	echo "\n";
}
