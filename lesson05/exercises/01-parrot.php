<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Parrot</title>
</head>
<body>

<?php

// $_REQUEST == $_POST + $_GET

// print_r($_REQUEST );

$sentence = "";

if( isset( $_POST['sentence'] ) ) {

	$sentence = $_POST['sentence'];
}

if( isset( $_POST['new_word'] ) ) {

	$sentence .= " $_POST[new_word]";
}

?>

	<form action="#" method="post">

		Enter a word:
		<input type="text" name="new_word">
		<input type="hidden" name="sentence" value="<?php echo $sentence ?>">
		<input type="hidden" name="sentence" value="<?= $sentence ?>">
		<input type="submit" name="submit">

	</form>
	
<?php if( isset($_POST['submit']) ) {

	// echo "we have data! <br>";

	echo "Current word is: $_POST[new_word]<br>";
	echo "All words: $sentence";

}
?>
	
</body>
</html>
