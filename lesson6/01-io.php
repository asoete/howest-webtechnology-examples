<?php

$file_contents = file_get_contents( 'input.fasta' );

// $handle = fopen( 'input.fasta');
// fread( $handle );
// fclose( $handle );

// var_dump( $file_contents );

$file_as_array = file( 'input.fasta' );

// print_r( $file_as_array );

touch('hello-world.txt');

# $handle = fopen('hello-world.txt');
# fwrite( $handle, "Hello from PHP\n");
# fclose( $handle );

file_put_contents( 'hello-world.txt', "second line\n");
file_put_contents( 'hello-world.txt', "second line\n",  FILE_APPEND );

rename( 'hello-world.txt', 'hello-class.txt' );

unlink( 'hello-class.txt' );

mkdir('dir');
rmdir('dir');

// read contents of dir

$handle = opendir( '.' );

# while( false !== ($file = readdir($handle) ) ) {
while( $file = readdir($handle) ) {

   if( $file === false ) {

      break;
   }
   echo "file in . : $file \n";
}

$list  = glob('./*');
print_r( $list );

print_r( glob('./*') );
