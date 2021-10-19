<?php

$file_as_string = file_get_contents('input.fasta');
$file_as_array = file('input.fasta');

// foreach( $file_as_array as $line ) {
// 
// 	$line = rtrim( $line );
// 	var_dump($line);
// }

touch( 'wd/file.txt' );

$filehandle = fopen( 'wd/file.txt', 'a' );
fwrite( $filehandle, "Hello Again\n" );
fclose( $filehandle );

file_put_contents( 'wd/file.txt', "Hello from file_put_contents\n", FILE_APPEND  );

copy( 'wd/file.txt', 'wd/copy.txt' );

unlink('wd/copy.txt');

// file_exists()
mkdir( 'wd/subdir' );

rename( 'wd/subdir', 'wd/much-cooler-name' );

touch( 'wd/much-cooler-name/file1');
touch( 'wd/much-cooler-name/file2');
touch( 'wd/much-cooler-name/file3');

$dirhandle = opendir('wd/much-cooler-name');

while( false !== ($file = readdir($dirhandle) ) ) {

	echo "- $file\n";
}

print_r( glob('wd/much-cooler-name/file*') );

// rmdir('wd/much-cooler-name');
?>
