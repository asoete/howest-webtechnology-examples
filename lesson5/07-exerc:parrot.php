<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Parrot</title>
</head>


<body>

<?php

	//print_r( $_POST );
	$sentence = '';
	
	if( isset($_POST['sentence']) ) {
	
		$sentence = $_POST['sentence'];
	}
	
	if( isset($_POST['word']) ) {
	
		$sentence .= " $_POST[word]";
	}
	
	//echo "\$sentence = '$sentence'<br>";
?>

   <form action="#" method="post">
      Enter a word:
      <input type="text" value="" name="word">
      <input type="hidden" value="<?php echo $sentence?>" name="sentence">
      <input type="submit" value="submit" name="submit">
   </form>

<?php
/*
$sentence = "$sentence $word"; 
$sentence .= " $word";
*/

if( isset( $_POST['word'] ) ) {

	echo "The current word is: $_POST[word]";
}

if( isset( $_POST['sentence'] ) ) {

	echo "<br>";
	echo "The current sentence is: $sentence";
}

?>

</body>
</html>

