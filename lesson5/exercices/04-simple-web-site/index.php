<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Home</title>
   </head>
   <body>
      <h1>Home</h1>

      <p>
      Welcome to my home page
      </p>

      <pre>
      <?= __FILE__ ?>

      <?= __DIR__ ?>
      </pre>

      <?php include( __DIR__ . '/navs.html'); ?>

      <?php include( 'navs.html'); ?>



   </body>
</html>
