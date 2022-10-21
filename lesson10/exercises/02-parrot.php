<?php

$sentence = $_POST['sentence'] . ' ' . $_POST['word'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Parrot</title>
</head>
<body>

	<form action="#" method="post">
		<div>
			Enter a word:
			<input type="hidden" name="sentence" value="<?= $sentence ?>">
			
			<input type="text" name="word" value="">
			<input type="submit" value="submit" name="submit">
		</div>
	</form>
	
<?php

if( isset($_POST['submit']) ) {

	$word = $_POST['word'];

	echo "<div>";
		echo "The new word is: '$word'";
	echo "</div>";

	echo "<div>";
		echo "The sentence is: '$sentence'";
	echo "</div>";
}

?>
	
</body>
</html>
