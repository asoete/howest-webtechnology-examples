<pre>
<?php

// Read file

$file_as_array = file( 'file.txt' ); // /tmp/path/tofile.txt; '../../file.txt';

// var_dump($file_as_array);

$file_as_string = file_get_contents( 'file.txt' );

// var_dump( $file_as_string);

touch('my-own-file.txt');

$handle = fopen('my-own-file.txt', 'w');

//var_dump( fwrite($handle, "Hello World\n") );

fclose( $handle );

file_put_contents('my-own-file.txt', "Hello from file_put_contents...\n");

rename('my-own-file.txt', 'renamed-file.txt');

unlink('renamed-file.txt');


mkdir('my-folder'); // /path/to/folder...

touch('my-folder/subfile.txt');

rename('my-folder', 'renamed-folder');

unlink('renamed-folder/subfile.txt');
// var_dump( rmdir('renamed-folder') );

$handle = opendir( '.' );

while( false !== ($file = readdir($handle)) ) {

	// echo "$file\n";
}

// print_r( glob('./*.php') );


?>
</pre>
<form action="#" method="post" enctype="multipart/form-data">

	<input type="file" name="filefield">
	<!-- <input type="file" name="filefield-2"> -->
	<input type="submit" name="submit" value="upload file">

</form>

<pre>
<?php

if( isset( $_POST['submit']) ) {

	print_r( $_POST );
	print_r( $_FILES );
	
	print_r( file( $_FILES['filefield']['tmp_name'] ) );
	
	move_uploaded_file($_FILES['filefield']['tmp_name'], '/store/file/here.txt');
}

?>











