<form action="#" method="post" enctype="multipart/form-data">

	<input type="file" name="my-uploaded-file">
	
	<input type="submit" name="submit">

</form>

<?php

// 	echo file_get_contents( $_FILES['my-uploaded-file']['tmp_name'] );
	$string = file_get_contents( $_FILES['my-uploaded-file']['tmp_name'] );
	echo $string;

?>
