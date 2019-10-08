
<nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <a href="index.php" class="navbar-brand">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        
                    
<?php
if (isset($_SESSION['email_id']))
    {
       
        
        $welcome_query="select * from users where email_id='$_SESSION[email_id]'";
        $welcome_query_result= mysqli_query($con, $welcome_query);
        $row= mysqli_fetch_array($welcome_query_result);
        ?>
        <li><a href="post_login_products.php"><span class="glyphicon"></span>Hi, <?php echo $row['name'].'!'; ?></a></li>
        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
        <li><a href="setting.php"><span class="glyphicon glyphicon-th"></span>Settings</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
    <?php
    }
 else {
     ?>  
     <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li> 
    <?php
     }
    ?>

         </ul>
                </div>
            </div>
        </nav>
