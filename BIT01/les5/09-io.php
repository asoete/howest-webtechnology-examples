<?php

// read file
// read into array

$array = file('lorem-ipsum.txt');

// print_r( $array );

$string = file_get_contents( 'lorem-ipsum.txt' );

// echo "Files text was: $string";

// -------------------------------------
// Create file

touch('hello-world.txt');

// Delete file

unlink( 'hello-world.txt' );

// --------------------------------------

// Write

$handle = fopen('write.txt', 'w');
fwrite( $handle, "Hello World\n");
fclose( $handle );

// short form:

file_put_contents( 'write2.txt', "Hello world to\n" );

// --------------------------------------
// rename

rename('write2.txt', 'other-file.txt');

// Directories

mkdir( 'some-dir' );
rename( 'some-dir', 'renamed-dir' );
rmdir( 'renamed-dir' );

// ---------------------------------------
// list

$handle = opendir( '.' );

while( false !== ( $file = readdir($handle) ) ) {

	// echo "- $file\n";
}

// glob

$files = glob('*.html');

print_r( $files );







