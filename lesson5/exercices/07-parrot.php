<?php

$word = '';
if( isset($_POST['word']) ) {

   $word = $_POST['word'];
}

$sentence = '';
if( isset($_POST['sentence']) ) {

   $sentence = $_POST['sentence'];
}

$sentence = "$sentence $word";

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Parrot</title>
</head>
<body>
   <h2>Enter a word and submit</h2>

   <form action="#" method="post">
      <label>
         Word
         <input type="text" name="word">
      </label>

      <br>
      <input type="hidden" value="<?= $sentence ?>" name="sentence">

      <br>
      <input type="submit" value="submit" name="submit">
   </form>

   <?php
if( isset($_POST['submit']) ) {

   echo "<hr>";

   echo "<p>";
   echo "Current Word: <strong>$_POST[word]</strong>";
   echo "</p>";
   echo "<p>";
   echo "Sentence: <strong>$sentence</strong>";
   echo "</p>";
}
?>
</body>
</html>
