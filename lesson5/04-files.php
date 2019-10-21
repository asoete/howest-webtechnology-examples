<?php

$string = file_get_contents('file.txt');

var_dump($string);

$array = file( 'file.txt' );

var_dump($array);

$file = 'created-from-php.txt';
touch( $file );

$handle = fopen( $file, 'w' );

fwrite( $handle, "Hello World\n" );

fclose( $handle );

file_put_contents( $file, "Hello World 2\n", FILE_APPEND);

rename( $file, 'new-file.txt');

unlink( 'new-file.txt' );

mkdir("testdir");
rename("testdir", "newdir");
rmdir("newdir");

$dirh = opendir( "." );

while( false !== ( $file = readdir($dirh) )) {

	echo "$file\n";
}

print_r( glob("*") );

?>
