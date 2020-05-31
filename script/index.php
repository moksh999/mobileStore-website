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
        
        <title>E-Store</title>
        <link type="text/css" rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
        <script src="Bootstrap/js/jquery-3.5.1.min.js"></script>
        <script src="Bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        include '../includes/header.php';
        ?>
        <div class="container-fluid top-margin">
            <div class="row" >
                <div class="col-xs-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/one-plus-7T-pro.jpg"  class= "img-responsive" alt="Phone">
                    <div class="caption text-center">
                        <h3>One plus 7T pro</h3>
                        <p>Battery : 4085mAH<br>
                            Camera : 16MP + 20MP | 16MP Front Camera<br>
                            RAM : 8GB <br>
ROM : 256GB  </p>
                        <p><b>Price:47,999/-</b></p>
                        <button class="btn btn-primary btn-block">Buy now</button>
                    </div></div>
                </div>
                <div class="col-xs-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/one-plus-7T.jpg" class=" img-responsive" alt="phone">
                    <div class="caption text-center">
                        <h3>One plus 7T</h3>
                        <p>Battery : 3800mAH<br>
                            Camera : 48MP +8MP + 16MP | 16MP Front Camera<br>
                            RAM : 8GB <br>
ROM : 128GB </p>
                        <p><b>Price:35,999/-</b></p>
                        <button class="btn btn-primary btn-block">Buy now</button>
                    </div>
                        </div>
                </div>
                
                <div class="col-xs-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/iphone-8.jpg" class=" img-responsive" alt="Iphone-8">
                    <div class="caption text-center">
                        <h3>iPhone 8</h3>
                        <p>Battery : 3400mAH<br>
                            Camera : 20MP  | 16MP Front Camera<br>
                            RAM : 8GB <br>
                            ROM : 128GB</p>
                        <p><b>Price:41,999/-</b></p>
                        <button class="btn btn-primary btn-block">Buy now</button>
                    </div>
                        </div>
                </div>
            </div>
            <div class="row" >
                <div class="col-xs-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/iphone-7.jpg"  class="img-responsive " alt="Iphone-7">
                    <div class="caption text-center">
                        <h3>iPhone 7</h3>
                        <p>Battery : 3400mAH<br>
                            Camera : 12MP  | 16MP Front Camera<br>
                            RAM : 8GB <br>
                            ROM : 256GB   
</p>
                        <p><b>Price:29,999/-</b></p>
                        <button class="btn btn-primary btn-block">Buy now</button>
                    </div>
                        </div>
                </div>
                
                <div class="col-xs-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/iphone-xs-max.jpg"  class="img-responsive " alt="Iphone-xs-max">
                    <div class="caption text-center">
                        <h3>iPhone XS max</h3>
                        <p>Battery : 3400mAH <br>
                            Camera : 32MP + 20MP | 16MP Front Camera<br>
                            RAM : 8GB <br>
                            ROM : 256GB   <br>
                            </p>
                        <p><b>Price:99,999/-</b></p>
                        <button class="btn btn-primary btn-block">Buy now</button>
                    </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/iphone-xr.jpg"  class= "img-responsive" alt="Iphone-xr">
                    <div class="caption text-center">
                        <h3>iPhone XR</h3>
                        <p>Battery : 4085mAH<br>
                            Camera : 16MP + 20MP | 16MP Front Camera<br>
                            RAM : 8GB <br>
                            
                            ROM : 256GB <br>  
</p>
                        <p><b>Price:53,999/-</b></p>
                        <button class="btn btn-primary btn-block">Buy now</button>
                    </div>
                    </div>
                </div>
                
            </div>
        </div>
        <?php include '../includes/footer.php';?>
    </body>
</html>
