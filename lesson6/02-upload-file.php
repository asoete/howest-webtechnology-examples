<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Upload file</title>
</head>
<body>

   <form action="#" method="post" enctype="multipart/form-data">

      <input type="file" value="" name="uploaded_file_1">
      <input type="file" value="" name="uploaded_file_2">

      <input type="submit" class="submit" value="submit" name="submit">

   </form>

   <pre>

<?php

if( isset( $_POST['submit'] )) {


   echo "POST";
   print_r( $_POST );

   echo "FILES";
   print_r( $_FILES );

   $array = file( $_FILES['uploaded_file_1']['tmp_name']);

   // print_r( $array );

   print_r( file( $_FILES['uploaded_file_1']['tmp_name']) );

   move_uploaded_file( $_FILES['uploaded_file_1']['tmp_name'], '/some/location/here.txt');
}

?>

   </pre>

</body>
</html>
