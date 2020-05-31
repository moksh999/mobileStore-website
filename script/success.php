<?php
require '../includes/common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}
$id=$_SESSION['user_id'];
$query="SELECT id FROM users_items WHERE status='Added to cart' AND user_id='$id' ";
$result= mysqli_query($con, $query) or die(mysqli_error($con));
while($row= mysqli_fetch_array($result)){
    $product_id= $row['id'];
    $query_update="UPDATE users_items SET status='confirmed' WHERE id='$product_id'";
    $result_update=mysqli_query($con, $query_update) or die(mysqli_error($con));
}
        
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Success</title>
        <?php include '../includes/links.php';?>
    </head>
    <body>
       <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                   
                    <a href="index.php" class="navbar-brand">Lifestyle Store</a>
                </div>
                
            </div>
        </nav>
        <div class="container top-margin">
            <div class="jumbotron text-center">
                <p>Thank you for shopping with us.</p>
                <p><a href="home.php">Click here</a> to purchase any other item</p>
            </div>
        </div>
    </body>
</html>
