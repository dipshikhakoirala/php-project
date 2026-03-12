<?php
session_start();
include 'config.php';

if(!isset($_SESSION['admin'])){
header("Location: login.php");
}

$result = mysqli_query($conn,"SELECT * FROM bookings");
?>

<h1>Admin Dashboard</h1>

<a href="add_package.php">Add Wedding Package</a> |
<a href="logout.php">Logout</a>

<h2>Customer Bookings</h2>

<table border="1" cellpadding="10" align="center">

<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Wedding Date</th>
<th>Venue</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>
<td><?php echo $row['customer_name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['event_date']; ?></td>
<td><?php echo $row['venue']; ?></td>
</tr>

<?php } ?>

</table>