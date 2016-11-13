<?php

$array = [1,2,3,4,5];

$nr_els = count( $array );
$first_el = array_shift( $array );

# ===========================================================

function my_cool_fn() {

	/* Do stuff */
}

# ===========================================================

function say() {

	echo "hello world!\n";
}

#say();
#say();
#say();
#say();

# ========================================

function greet( $name ) {

	echo "Hello $name\n";
}

greet('john');
greet('jane');
// greet();


# ========================================

function greet_with_default( $name = 'anonymous') {

	echo "Hello $name\n";
}

greet_with_default('john');
greet_with_default();


# ==========================================

function multi_param( $param1, $param2 = null, $param3 = 12 ) {

	/* ... */
}

# ==========================================

function greet_return( $name ) {

	return "Hello $name";
}

echo greet_return( 'john' );
$greeting =  greet_return( 'jane' );

# ==========================================

function fn() {

    if( true ) {

        return "was true";
    }

    echo "This will never execute because the function returned from the if statement";
}

echo fn();








