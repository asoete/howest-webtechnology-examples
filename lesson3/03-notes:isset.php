<?php

if( isset($argv[1]) ) {

	echo "arg 1 was set\n";
}
else{

	echo "arg 1 was NOT set\n";
}

$some_random_var = 'some value';
if( isset($some_random_var) ) {

	echo "some_random_var exists\n";
}
else{

	echo "some_random_var doesn't exist\n";
}
