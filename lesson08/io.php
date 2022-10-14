<?php

// $file_handle = fopen('fasta.txt', 'r');
// 
// $size = filesize('fasta.txt');
// 
// echo fread($file_handle, $size);
// 
// fclose( $file_handle );

$blob = file_get_contents("fasta.txt");

$lines = explode("\n", $blob);

$lines = file("fasta.txt");

print_r($lines);

foreach( $lines as $line ) {

	$line = trim($line);
	echo ">>>$line<<<\n";
}

$fhw = fopen("file2.txt", "a");
fwrite($fhw, "content");
fclose($fhw);

file_put_contents("file3.txt", "content for file3\n", FILE_APPEND);

unlink( 'file2.txt' );
touch( 'new-file.txt' );
rename('new-file.txt', 'file4.txt');

mkdir("dir");
mkdir("dir2");
rmdir("dir2");

rename('dir', 'dir1');
?>
