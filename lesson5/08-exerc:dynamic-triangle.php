<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Dynamic triangles</title>
</head>
<body>

<?php
	
$base = 10;
$char = '*';

if( isset($_GET['submit']) ) {

	$base = $_GET['base'];
	$char = $_GET['char'];
}
?>

   <form action="#" method="get">

      Enter base size:
      <input type="number" value="<?php echo $base ?>" name="base">

      <br>

      Enter character:
      <input type="text" value="<?= $char ?>" name="char">
      <!--
      <select name="char">
      	<option value="*" <?php if($char == '*'){ echo 'selected';}?>>*</option>
      	<option value="@">@</option>
      	<option value="%" selected>%</option>
      	<option value="$">$</option>
      </select>
      -->
      

      <br>

      <input type="submit" value="submit" name="submit">
   </form>

<?php

if( isset( $_GET['submit']) ) {

	echo "<hr>";
	
	for ($rowcount = 0; $rowcount < $base ; $rowcount++) {
	    
	    for ($charcount = 0; $charcount < $rowcount ; $charcount++) {
	       
	       echo $char; 
	    }
	    echo "<br>";
	}
}


?>

</body>
</html>













