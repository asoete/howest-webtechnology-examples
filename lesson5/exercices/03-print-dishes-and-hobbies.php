<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Print Dishes and hobbies</title>
</head>
<body>

<h1>Dishes</h1>

<?php

$dishes = [

   'fries',
   'pancackes',
   '...'
];

echo "<ol>";
foreach( $dishes as $dish ) {

   echo"<li>$dish</li>";
}
echo "</ol>";

?>

<h1>Hobbies</h1>

<?php

$hobbies = [
   'basketball',
   'music',
   'gaming',
   '...'
];

echo "<ul>";
foreach( $hobbies as $hobby ) {

   echo "<li>$hobby</li>";
}
echo "</ul>";

?>

<h1>Hobbies V2</h1>

<ul>

<?php foreach( $hobbies as $hobby ): ?>

   <li><?php echo $hobby ?> </li>

   <li>Sec echo : <?= $hobby ?> </li>

<?php endforeach; ?>
</ul>


</body>
</html>
