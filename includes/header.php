<div class="nav navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                <span class="glyphicon glyphicon-collapse-down"></span>
                
            </button>
            <a href="../Script/index.php" class="navbar-brand">E-Store</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php if(isset($_SESSION['email'])) { 
                    $user_id=$_SESSION['user_id'];
                    $query="SELECT name FROM users WHERE id='$user_id' ";
                    $result= mysqli_query($con, $query) or die(mysqli_error($con));
                    $row= mysqli_fetch_array($result);
                    $name=$row['name'];
                    ?>       
                <li><a href="home.php" class="text-center active">Hello,<?php echo $name?></a></li>
                <li><a href="cart.php" class="text-center"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                <li><a href="settings.php" class="text-center"><span class="glyphicon glyphicon-cog"></span> Settings </a></li>
                <li><a href="logout.php" class="text-center"><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>                
            <?php }else{?>
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>    
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="about.php"><span class="glyphicon glyphicon-list-alt"></span> About us</a></li>
                <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact us</a></li>
            <?php }?>        

            </ul>
        </div>
    </div>
</div>