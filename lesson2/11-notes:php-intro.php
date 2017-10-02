<?php

/*
	// Prints

	echo "hello world\n";
	echo 'hello world\n';
	print( "hello world" );
	
	// Types of comments
	
	# comment type 1
	echo "before # comment\n"; # comment type one
	// comment type 2
	// comment
	echo "before comment\n"; // comment type 2...

	/* multiline comment
		also comment
		close the comment */
	
	// echo "Start echo", /* some inline comment */ "Stop echo";
	//echo "Start echo"; // some inline comment "Stop echo";
	
	// Variables
	$variable = 'Hello, welcome to PHP';
	
	echo $variable . "\n";
	echo "First part" . ' ' . 'second part ' . $variable . "\n";
	echo "variable = $variable\n";
	echo 'variable = $variable\n' . "\n";
	echo "\$variable = $variable\n";
	
	$string = 'some string'; // "some string"
	$int = 123;
	$float = 3.14;
	$boolean = true;
	$boolean = false;
	
	var_dump( $int );
	var_dump( $float );
	var_dump( $boolean );
	var_dump( 'false' );
	
	$sum = $int + 45;
	var_dump( $sum );
	
	$res = $int - $float;
	var_dump( $res );
	
	$res = $int / 11;
	var_dump( $res );
	
	$res = $int * $float;
	var_dump( $res );
	
	$res = 5 ** 3;
	var_dump( $res );
	
	$res = 24 % 5;
	var_dump( $res );
	
	$od_or_even = 5 % 2;
	var_dump( $od_or_even);
	
	$od_or_even = 5 % 2 == 0;
	var_dump( $od_or_even);
	
	var_dump( 'abc' == 'abc' );
	var_dump( 1 == 1 );
	var_dump( 1 != 1 );
	var_dump( !false );
	
	var_dump( 1 < 2 );
	var_dump( 3 <= 2 );
	
	var_dump( 1 > 2 );
	# var_dump( 1 !< 2 ); Not allowed
	var_dump( 1 >= 2 );
	# var_dump( 1 => 2 ); Not allowed
	
	// If/Else
	
	if( 1 > 2 ) {
		
		echo "1 is larger then 2\n";
	}
	else {
	
		echo "1 is not larger then 2\n";
	}
	
	$var = 5;
	
	if( $var < 3 ) {
	
		echo 'Var is less then 3' . "\n";
	}
	else if( $var > 3 ){
		
		echo 'Var is more then 3' . "\n";
	}
	else {
	
		echo "Var is exactly 3\n";
	}
	
	// Combine conditions
	
	var_dump( true and false );
	var_dump( true or false );
	
	var_dump( 1 < 2 and  0 < 1 );
	
	$var = 12;
	
	var_dump( 13 % 3 == 0 );  // Check is div. by 3...
	
	// Test if $var is div. 3 and 4
	if( $var % 3 == 0 and $var % 4 == 0 ) {
	
		echo "$var is div. by 3 AND 4\n";
	}
	else {
		
		echo "$var is NOT div. by 3 AND 4\n";
	}
	
	// Test if $var is div. 3 or 4
	if( $var % 3 == 0 or $var % 4 == 0 ) {
	
		echo "$var is div. by 3 OR 4\n";
	}
	else {
		
		echo "$var is NOT div. by 3 OR 4\n";
	}
	
	var_dump( ( 1 < 2 or 1 == 0 ) and 2 > 3 );
	
	// and -> &&
	// or -> ||
	
	// Loops
	$counter = 5;
	while( $counter > 0 ) {
	
		echo "$counter) hello world from a while loop\n";
		$counter = $counter - 1;
	}
	
	// Count from 1 to 10...
	$counter = 1;
	while( $counter <= 10 ) {
	
		echo $counter . "\n";
		$counter = $counter + 1;
	}
	
	// Count from 50 to 60
	$counter = 50;
	while( $counter <= 60 ) {
	
		echo $counter . "\n";
		$counter = $counter + 1;
	}
	
	// Count from 0 to 100 in steps of 3
	$counter = 0;
	while( $counter <= 100 ) {
	
		echo $counter . "\n";
		$counter = $counter + 3;
	}
	
	$counter = $counter + 1;
	$counter += 1; // $counter += 3;
	$counter++;
	$counter--;
	
	// For loops
	for( $counter = 0; $counter < 10; $counter+=3 ) {
	
		echo "New loop iteration\n";
	}
	
	// Count from 0 to 10
	
	for( $c = 0; $c <= 10; $c++ ) {
	
		echo "$c\n";
	}
	
	// Count from 10 to 0
	for ($i = 10; $i >= 0 ; $i--) {
	
	    echo "$i\n";
	}
	
	
	
	
	
	
	
	
	
	
	
	
?>
