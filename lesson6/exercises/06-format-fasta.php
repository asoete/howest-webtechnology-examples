<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Format Fasta</title>
</head>
<body>

   <form action="#" method="post" enctype="multipart/form-data">

   <input type="radio" class="radio" value="file" name="upl_type">
   Select File<br>
   <input type="file" value="" name="file"><br>

   <input type="radio" class="radio" value="paste" name="upl_type">
   Paste fasta<br>
   <textarea name="paste"></textarea>

   <input type="submit" class="submit" value="submit" name="submit"><br>




   </form>

<?php

if( isset($_POST['submit'] )) {

   $seqs = [];
   if( $_POST['upl_type'] == 'file' ) {

      $seqs = file( $FILES['file']['tmp_name']);
   }
   elseif( $_POST['upl_type'] == 'paste' ) {

      $seqs = explode( "\n", $_POST['paste'] );
   }
   else {

      echo "invalid upload type";
      exit;
   }


   foreach( $seqs as $line ) {

      if( preg_match('/^>/', $line) ) {

         // handle header
      }
   }
}

?>

</body>
</html>
