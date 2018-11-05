<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Password validate</title>
   <style type="text/css">
   label {
      display: block;
      margin: 1em 0;
   }
   </style>
</head>
<body>
   <form action="#" method="post">
      <label>
         Init<br>
         <input type="password" value="" name="password">
      </label>
      <label>
         Repeat<br>
         <input type="password" value="" name="repeat">
      </label>

      <input type="submit" value="submit" name="submit">
   </form>

<?php

if( isset( $_POST['submit'] ) ) {

   # print_r( $_POST );

   $errors = [];

   // -- test first pass

   if( !empty($_POST['password']) ) {

      $pass = $_POST['password'];
   }
   else {

      $errors[] = "Please specify the first password";
   }

   // -- test sec pass

   if( !empty( $_POST['repeat']) ) {

      $pass_repeat = $_POST['repeat'];
   }
   else {

      $errors[] = "Please specify the second password";
   }

   // -- test length

   if( strlen($pass) < 3 ) {

      $errors[] = "Password should be at least 8 chars long";
   }

   // -- test equal

   if( $pass !== $pass_repeat ) { // != -> == !== -> ===

      $errors[] = "Password should be equal.";
   }

   // -- test letter and numbers

   if( !preg_match('/[a-zA-Z]+/', $pass) or !preg_match('/[0-9]+/', $pass) ) {

      $errors[] = "Pass should have at least one number (0-9) and one letter (a-z)";

   }

   // ---- show errors

   if( !empty($errors) ) {

      echo "<ul>";
      foreach( $errors as $error ) {

         echo "<li> $error</li>";
      }
      echo "</ul>";
   }
   else {

      echo "Passwords passed all tests";
   }

}

?>

</body>
</html>
