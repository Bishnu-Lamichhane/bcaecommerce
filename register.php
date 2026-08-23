<?php 
require_once "header.php";
?>
<?php 
require_once "connection.php";
?>
<?php
if(!empty($_POST)){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $gender = $_POST['gender'];
  $sql = "INSERT INTO users(name,email,password,gender) VALUES('$name','$email','$password','$gender' )";
  $result = mysqli_query($conn,$sql);
  if($result){
    $_SESSION['success']="Account Created";
    header("Location:register.php");
  }else{
    $_SESSION['error']="Account not created";
    header("Location:register.php");
  }

}
 ?>
<h1>welcome to bca ecommerce  register page </h1>

 <form action="" method="post">
  <form action="register.php" method="post">
    name:<br>
    <input type="text" name="name" ><br>
    
     email:<br>
    <input type="email" name="email" ><br>

    password:<br>
    <input type="password" name="password" ><br>


    gender:<br>
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="others">Others
    <button>Create New account</button><br>

    <!-- <button name="addUser">Add Users</button><br> -->


</form>
<?php 
require_once "footer.php";  
?>

