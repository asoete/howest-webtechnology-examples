<form action="#" method="post" enctype="multipart/form-data">

	<input type="file" name="my-uploaded-file">
	
	<input type="submit" name="submit">

</form>

<?php

	echo "<pre>";
	print_r( $_POST );
	
	print_r( $_FILES );
	
	$lines = file( $_FILES['my-uploaded-file']['tmp_name'] );
	
	print_r( $lines );
?>
