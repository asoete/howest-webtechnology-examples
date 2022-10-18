<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Form</title>
</head>
<body>

<?php
if( isset($_POST['submit']) ):

	echo "We have data, hide form";

	print_r($_POST);

else:
?>

	No data, show form
	<form action="" method="post">

	<input type="text" name="fname" value="">
	<input type="submit" name="submit" value="GO">
	

	</form>
<?php
endif;
?>
	
</body>
</html>
