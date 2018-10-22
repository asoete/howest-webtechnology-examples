<?php

$form_name = '';
if( isset( $_POST['name'])) {

   $form_name = $_POST['name'];
}

$form_age = '';
if( isset( $_POST['age'])) {

   $form_age = $_POST['age'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>validate Age</title>
</head>
<body>

   <h1>Validate Age</h1>

   <form action="#" method="post">
      <p>
         <label>
            Name
            <input type="text" class="text" value="<?= $form_name?>" name="name">
         </label>
      </p>

      <p>
         <label>
            Age:

<input type="number" class="submit" value="<?= $form_age ?>" name="age">
         </label>
      </p>

      <input type="submit" class="submit" value="submit" name="submit">
   </form>

<?php

if( isset($_POST['submit']) ) {

   if( empty($_POST['name']) ) {
      echo '<p class="error">No name provided</p>';
   }
   elseif( empty($_POST['age']) ) {
      echo '<p class="error">No age provided</p>';
   }
   else {

      if( $_POST['age'] < 21 ) {

         echo "Access denied";
      }
      else {

         echo "Access Granted";
      }
   }
}
?>

</body>
</html>
