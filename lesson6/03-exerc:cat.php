<!DOCTYPE html>
<html>
<head>
	<title>Cat file</title>
</head>
<body>

<?php if( isset( $_POST['submit']) ):?>

	<!-- // <?= '' ?> == <?php echo '' ?> -->

	<h1>File: `<?= $_FILES['file']['name']?>`'s content was:</h1>
	<?php echo "<h1>File: '"
		. $_FILES['file']['name']
		."`'s content was:</h1>";
	?>
	
	<pre><?= file_get_contents( $_FILES['file']['tmp_name'] ); ?></pre>

<?php else: ?>

	<form action="#" method="POST" enctype="multipart/form-data">
		<input type="file" name="file">
		<input type="submit" name="submit" value="Upload"/>
	</form>
	
<?php endif; ?>
</body>
</html>	
