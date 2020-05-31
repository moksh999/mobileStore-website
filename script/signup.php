<?php
require '../includes/common.php';
if(isset($_SESSION['email'])){
    header('location:home.php');
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
        <title>Sign up| mobile store</title>
        <?php include '../includes/links.php';?>
    </head>
    <body>
        <?php
        include '../includes/header.php';
        ?>
        <div class="container top-margin">
            <div class="col-md-4 col-md-offset-4 panel">
                <div class="panel-heading">
                    <h1>SIGN UP</h1>
                </div>
                <div class="panel-body">
                <form method="POST" action="signup_script.php">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" placeholder="Name" required>
                    </div> 
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                    <?php
                        if(isset($_GET['m1'])){
                            echo $_GET['m1'];
                        }
                    ?>
                    </div>
                    
                    <div class="form-group">
                        <input type="password" name="pass" class="form-control"  pattern=".{6,}" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="contact" class="form-control" placeholder="Contact" maxlength="10" size="10" required>
                    <?php
                        if(isset($_GET['m2'])){
                            echo $_GET['m2'];
                        }
                    ?>
                    </div>
                    <div class="form-group">
                        <input type="text" name="city" class="form-control" placeholder="City" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" class="form-control" placeholder="Address" required>
                    </div>
                    <button class="btn btn-primary" type="submit">Sign up</button>
                </form>
                </div>
            </div>
        </div>
        <?php include '../includes/footer.php';?>
    </body>
</html>
