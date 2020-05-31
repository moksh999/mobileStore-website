<?php
require '../includes/common.php';
$id=$_GET['id'];
$query="DELETE from users_items WHERE id='$id'";
$submit_query= mysqli_query($con, $query) or die(mysqli_error($con));
header('location:cart.php');
?>