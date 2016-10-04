<?php

/*
Create a script that prints a right + bottom balanced triangle of asterisks with base defined by parameter.
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

	$nr_spaties = $base - $row;

	for( $i=0; $i < $nr_spaties; $i++) {
	
		echo ' ';
	}

	for( $nr_ast=$row	; $nr_ast > 0; $nr_ast-- ) {

		echo "*";
	}
	echo "\n";
}
