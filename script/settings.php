
<?php
require '../includes/common.php';
if(!isset($_SESSION['email'])){
    header('location:login.php');
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
        <title>Settings</title>
        <?php include '../includes/links.php';?>
    </head>
    <body>
        <?php
        include '../includes/header.php';
        ?>
        <div class="container top-margin">
            <div class="col-md-4 col-md-offset-4">
                <form method="POST" action="settings_script.php">
                    <h2>Update Password</h2>
                    <div class="form-group">
                        <input type="password" name="old_pass" class="form-control" placeholder="Old Password" required> 
                    </div>
                    <div class="form-group">
                        <input type="password" name="new_pass" class="form-control" placeholder="New Password" required> 
                    </div>
                    <div class="form-group">
                        <input type="password" name="check_pass" class="form-control" placeholder="Re-type New Password" required> 
                    </div>
                    <button type="submit" class="btn btn-success">Update</button><br>
                    <?php
                    if(isset($_GET['m1'])){
                        echo $_GET['m1'];
                    }
                    ?>
                </form>
            </div> 
        </div>
        <?php include '../includes/footer.php';?>
    </body>
</html>
