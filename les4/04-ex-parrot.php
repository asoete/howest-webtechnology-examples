<?php

if( isset( $_POST['sentence'] ) and !empty( $_POST['sentence']) ) {

	$sentence = $_POST['sentence'];
}
else {

	$sentence = '';
}

if( isset( $_POST['word'] ) and !empty( $_POST['word']) ) {

	$sentence .= " $_POST[word]";
}

?>

<form action="#" method="post">

	<label>
		Word:
		<input type="text" name="word">
	</label>
	
	<!-- <input type="text" name="sentence" value="<?php echo $sentence ?>"> -->
	<input type="hidden" name="sentence" value="<?= $sentence ?>">

	<input type="submit" name="submit">

</form>

<?php

if( isset( $_POST['submit']) ) {

	if( empty($_POST['word']) ) {
	
		echo "Warning: word is empty! ignoring...";
	}
	else {
	
		echo "<p>The current word is: <em>$_POST[word]</em><p>";
		echo "<p> The sentece is: <em>$sentence</em> <p>";
	}
}

?>

