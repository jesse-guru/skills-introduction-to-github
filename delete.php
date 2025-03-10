<?php
$id=$_GET['id'];

$conn=mysqli_connect("localhost","root","","ecarhire");

$query="DELETE FROM booking WHERE tid='$id'";

mysqli_query($conn,$query);

header("Location:bookings.php");



?>