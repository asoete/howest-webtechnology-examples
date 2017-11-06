<?php

debug( [ 1, 'two', 3, 'four'], 'yellow' );

debug( $_SERVER, 'pink' );


function debug( $array, $bg = null ) {

	if( isset($bg) ) {
	
		echo "<pre style=\"background: $bg;\">";
	}
	else {
		echo "<pre>";
	}
	
		print_r( $array );
	echo "</pre>";
}

exit;

my_function('me');
my_function('you', 'me');
my_function('him');
my_function();
my_function();
my_function();

function my_function( $name = 'world', $from = null ) {

	echo "Hello $name";
	
	if( isset( $from ) ) {
	
		echo " from $from";
	}
	echo "\n";
}
