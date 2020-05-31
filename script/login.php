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
        <title>Login</title>
        <?php include '../includes/links.php';?>
    </head>
    <body>
        <?php
        include '../includes/header.php';
        ?>
        <div class="container top-margin">
            <div class="col-md-4 col-md-offset-4 panel">
                <div class="panel-heading">
                    <h2>LOGIN</h2>
                </div>
                <div class="panel-body">
                <form method="POST" action="login_script.php">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                    <?php
                        if(isset($_GET['m1'])){
                            echo $_GET['m1'];
                        }
                    ?>
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" class="form-control" placeholder="Password" pattern=".{6,}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button><br>
                    <?php
                    if(isset($_GET['m2'])){
                            echo $_GET['m2'];
                        }
                    ?>
                </form>
                </div>
                <div class="panel-footer">
                    <p>Don't have an account?<a href="signup.php"> Register</a></p>
                </div>
            </div>
        </div>
        <?php include '../includes/footer.php';?>
    </body>
</html>

