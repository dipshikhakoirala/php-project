<?php
include 'config.php';

if(isset($_POST['add'])){
$name=$_POST['name'];
$price=$_POST['price'];
$decor=$_POST['decor'];
$desc=$_POST['desc'];

$q="INSERT INTO packages(package_name,price,decoration,description)
VALUES('$name','$price','$decor','$desc')";

mysqli_query($conn,$q);

echo "Package Added";
}
?>

<form method="POST">

<input type="text" name="name" placeholder="Package Name">

<input type="text" name="price" placeholder="Price">

<input type="text" name="decor" placeholder="Decoration Type">

<textarea name="desc"></textarea>

<button name="add">Add Package</button>

</form>