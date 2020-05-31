<?php
require '../includes/common.php';
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
        <title>Contact Us</title>
        <?php include '../includes/links.php';?>
    </head>
    <body>
        <?php
        include '../includes/header.php';
        ?>
        <div class="container-fluid background-img">
            <div class="top-margin ">
                <center>
            <h1 class="text-center page-title "> Welcome To Our Live Support</h1>
                </center>
            </div> 
        </div>
        <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Contact Us</h1>
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" class="form-control" rows="10"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
            <div class="col-md-4 compinfo-background">
                <h2 style="font-weight: 300;">Company Information</h2>
                <p>I47,Inorbit Plaza,</p>
                <p>DN nagar,Andheri-east,</p>
                <p>Mumbai,India</p>
                <p>Phone:(+91)9999999999</p>
                <p>Email:contactus@mobilestore.com</p>
                
            </div>
        </div>
        </div>
        <?php include '../includes/footer.php';?>
    </body>
</html>
