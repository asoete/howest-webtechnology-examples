<pre>
<?php

// Read file into array
$file_lines = file('lorem-ipsum.txt');
// print_r( $file_lines );

// read file into string
$file_content = file_get_contents('lorem-ipsum.txt');

// echo $file_content;

# =========================================

// Create file
touch('new-file.txt');

// rename files or dir
rename('new-file.txt', 'renamed-file.txt');

// remove file
unlink('renamed-file.txt');

# =========================================

mkdir('some_dir');

rmdir( 'some_dir' );

# =========================================

print_r( $_POST );
print_r( $_FILES );

if(isset( $_FILES['uploaded-file'] )) {

	print_r( file( $_FILES['uploaded-file']['tmp_name']) );
}

?>

Upload file

<form action="#" method="post" enctype="multipart/form-data">
	
	<input type="file" name="uploaded-file">
	<input type="submit" name="submit">

</form>














