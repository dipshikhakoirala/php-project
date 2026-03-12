<?php
include 'config.php';
$result = mysqli_query($conn,"SELECT * FROM packages");
?>

<!DOCTYPE html>
<html>


<head>
    <title>Wedding Event Management</title>
<link rel="stylesheet" href="style.css?v=2">
</head>

<body>  
    <nav class="navbar">wleyshdblwlawlK

<h2 class="logo">Capital Events</h2>

<ul>
<li><a href="index.php">Home</a></li>
<li><a href="about.php">About</a></li>
<li><a href="gallery.php">Gallery</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>

</nav>

<section class="hero">
    <h1>Wedding Nepal Events</h1>
</section>

<h1>Wedding Packages</h1>

<div class="container">

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<div class="card">

<h2><?php echo $row['package_name']; ?></h2>

<p><b>Price:</b> Rs <?php echo $row['price']; ?></p>

<p><b>Decoration:</b> <?php echo $row['decoration']; ?></p>

<p><?php echo $row['description']; ?></p>

<a class="btn" href="book_package.php?id=<?php echo $row['package_id']; ?>">Book Now</a>

</div>

<?php } ?>

</div>

</body>
</html>