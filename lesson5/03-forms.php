<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>HTML Forms and PHP</title>
</head>
<body>

<form action="handle-data.php" method="POST">

   <p>
      <label for="username">
         input[text]:
      </label>
      <input type="text" name="username" value="" id="username">
   </p>

   <p>
      <label>
         Password
         <input type="password" name="password" value="">
      </label>
   </p>

   <p>
      <label>
         Remember Me
         <input type="checkbox" name="save_password">
      </label>
   </p>

   <p>
      <label>
         Male
         <input type="radio" name="gender">
      </label>
      <br>
      <label>
         Female
         <input type="radio" name="gender">
      </label>
      <br>
      <label>
         X
         <input type="radio" name="gender">
      </label>
   </p>

   <p>
      Number
      <input type="number" value="" name="">
   </p>

   <p>
      Mail address
      <input type="email" value="" name="">
   </p>

   <p>
      Mail address
      <input type="file" value="" name="some_file">
   </p>

   <p>
   <select name="car">
      <option value="volvo">Volvo</option>
      <option value="audi">audi</option>
      <option value="bmw">BMW</option>
   </select>
   </p>

   <p>
   <select name="car" multiple>
      <option value="volvo">Volvo</option>
      <option value="audi">audi</option>
      <option value="bmw">BMW</option>
   </select>
   </p>

   <p>
      multi line data
      <textarea  cols="50" rows="5" name="proza"></textarea>
   </p>

   <input type="submit" name="submit_btn" value="Submitted">
</form>

</body>
</html>
