<?php
session_start();
include 'config.php';

if(isset($_POST['login'])){
$username=$_POST['username'];
$password=$_POST['password'];

$q="SELECT * FROM admin WHERE username='$username' AND password='$password'";
$r=mysqli_query($conn,$q);

if(mysqli_num_rows($r)==1){
$_SESSION['admin']=$username;
header("Location: dashboard.php");
}
else{
echo "Login Failed";
}
}
?>

<form method="POST">
<h2>Admin Login</h2>
<input type="text" name="username" placeholder="Username">
<input type="password" name="password" placeholder="Password">
<button name="login">Login</button>
</form>