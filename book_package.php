<?php
include 'config.php';

$id=$_GET['id'];

if(isset($_POST['book'])){

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$venue=$_POST['venue'];

$q="INSERT INTO bookings(package_id,customer_name,email,phone,event_date,venue)
VALUES('$id','$name','$email','$phone','$date','$venue')";

mysqli_query($conn,$q);

echo "Booking Successful!";
}
?>

<div class="booking-box">

<form method="post">

<input type="text" name="name" placeholder="Your Name" required>
<input type="email" name="email" placeholder="Email" required>
<input type="text" name="phone" placeholder="Phone" required>
<input type="date" name="date" required>
<input type="text" name="venue" placeholder="Venue" required>

<button type="submit">Book Now</button>

</form>

</div>
