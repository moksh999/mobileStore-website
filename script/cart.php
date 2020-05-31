<?php
require '../includes/common.php';
if(!isset($_SESSION['email'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cart</title>
        <?php include '../includes/links.php';?>
    </head>
    <body>
         <?php include '../includes/header.php';
         $user_id=$_SESSION['user_id'];
         $query="SELECT name,price,ui.id from users_items ui INNER JOIN items i ON ui.item_id=i.id WHERE ui.user_id='$user_id' AND status='Added to cart'";
         $result= mysqli_query($con, $query) or die(mysqli_error($con));
         ?>
        <div class="container top-margin">
            <?php
            if(mysqli_num_rows($result)==0){
            ?>
            <div class="jumbotron">
                <h2>Add Items To Cart First</h2>
            </div>
            <?php } ?>
            <div class="col-md-4 col-md-offset-4">
                <table class="table table-striped table-responsive">
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>     </th>
                    </tr>
                    <?php
                        $sum=0;
                        while($row=mysqli_fetch_array($result)){
                            $sum+=$row['price'];
                    ?>
                    <tr>
                        <td><?php echo $row['name'];?> </td>
                        <td><?php echo $row['price']; ?> </td>
                        <td><?php echo "<a href=cart-remove.php?id={$row['id']}>Remove</a>";?> </td>
                    </tr>
                        <?php }?>
                    <tr>
                        <td>Total price:</td>
                        <td><?php echo $sum ?> /-</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><a href="success.php"><button class="btn btn-primary" type="submit">Buy Now</button></a></td>
                    </tr>

                </table>
            </div>
        </div>
    </body>
</html>
