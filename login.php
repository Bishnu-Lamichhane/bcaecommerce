<?php 
require_once "header.php";
?>
<h1>welcome to bca ecommerce  login page </h1>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="#">
  <form action="register.php" method="post">
    name:
    <input type="text" name="name" >

    gender:
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="others">Others

    gmail:
    <input type="email" name="email" >

    password:
    <input type="password" name="password" >

    <button name="addUser">Add Users</button>

</form>
</body>
</html>
<?php 
require_once "footer.php";
 ?>
