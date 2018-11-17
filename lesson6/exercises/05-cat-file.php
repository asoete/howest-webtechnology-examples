<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Cat File</title>
</head>
<body>
   <h1>Cat File</h1>

   <form action="#" method="post" enctype="multipart/form-data">
      <input type="file" value="" name="file">
      <input type="submit" value="submit" name="submit">
   </form>

<?php

if( isset($_POST['submit']) and !empty( $_FILES['file']['tmp_name'] ) ) {

   echo "<h2>File '". $_FILES['file']['name']."' has contents: </h2>";

   echo "<blockquote><q>";
   echo "<pre>";
      echo file_get_contents( $_FILES['file']['tmp_name']);
   echo "</q></blockquote>";
   echo "</pre>";
}
else {

   echo 'Please Upload File';
}

?>

</body>
</html>
