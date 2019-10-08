<!DOCTYPE html>

<html>
    <head>
        <title>Products</title>
        <link rel="stylesheet" href="Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="Bootstrap/bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="Bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <?php
        include 'C:\wamp64\www\E_Commerce_Project\includes\common.php';
        include 'C:\wamp64\www\E_Commerce_Project\includes\header.php';
        include 'C:\wamp64\www\E_Commerce_Project\includes\check_if_added.php';
       ?> 
     
        
        <div class="container con-style">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.
                </p>
            </div>
                <div class="row text-center">
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="#"><img src="camera.jpg" alt="Responsive image" class="adjust_1"></a>
                        
                    <div class="caption">
                        <h3>Cannon EOS</h3>
                        <p>Price: Rs.36000.00</p>
                        </div>
                            <?php
                            if(!isset($_SESSION['email_id'])){
                                ?>
                           <p><a href="login.php" role="button" type="submit" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                            }
                            else{
                                if(check_if_added_to_cart(1)){
                                    ?><a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>;
                                    <?php
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div></div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="#"><img src="camera2.jpg" alt="Responsive image" class="adjust_1"></a>
                        
                    <div class="caption">
                        <h3>Nikon DSLR</h3>
                        <p>Price: Rs.40000.00</p>
                        
                    </div>
                        <?php
                            if(!isset($_SESSION['email_id'])){
                                ?>
                           <p><a href="login.php" role="button" type="submit" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                            }
                            else{
                                if(check_if_added_to_cart(2)){
                                    ?><a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>;
                                    <?php
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div></div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="#"><img src="camera1.jpg" alt="Responsive image" class="adjust_1"></a>
                        
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Price: Rs.45000.00</p>
                    </div>
                        <?php
                            if(!isset($_SESSION['email_id'])){
                                ?>
                           <p><a href="login.php" role="button" type="submit" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                            }
                            else{
                                if(check_if_added_to_cart(3)){
                                    ?><a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>;
                                    <?php
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div></div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="#"><img src="camera3.jpg" alt="Responsive image" class="adjust_1"></a>
                        
                    <div class="caption">
                        <h3>Olympus DSLR</h3>
                        <p>Price: Rs.50000.00</p>
                    </div>
                        <?php
                            if(!isset($_SESSION['email_id'])){
                                ?>
                           <p><a href="login.php" role="button" type="submit" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                            }
                            else{
                                if(check_if_added_to_cart(4)){
                                    ?><a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>;
                                    <?php
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                    <?php
                                }
                            }
                            ?>
                    </div></div></div>
            
            
            
            <div class="row text-center">
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="#"><img src="watch.jpg" alt="Responsive image" class="adjust_1"></a>
                    <div class="caption">
                        <h3>Titan Octane</h3>
                        <p>Price: Rs.13000.00</p>
                        </div>
                        <?php
                            if(!isset($_SESSION['email_id'])){
                                ?>
                           <p><a href="login.php" role="button" type="submit" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                            }
                            else{
                                if(check_if_added_to_cart(5)){
                                    ?><a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>;
                                    <?php
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div></div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="#"><img src="watch1.jpg" alt="Responsive image" class="adjust_1"></a>
                        
                    <div class="caption">
                        <h3>Titan Model #201</h3>
                        <p>Price: Rs.3000.00</p>
                        
                    </div>
                        <?php
                            if(!isset($_SESSION['email_id'])){
                                ?>
                           <p><a href="login.php" role="button" type="submit" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                            }
                            else{
                                if(check_if_added_to_cart(6)){
                                    ?><a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>;
                                    <?php
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div></div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="#"><img src="watch2.jpg" alt="Responsive image" class="adjust_1"></a>
                        
                    <div class="caption">
                        <h3>HMT Chronograph</h3>
                        <p>Price: Rs.7300.00</p>
                    </div>
                        <?php
                            if(!isset($_SESSION['email_id'])){
                                ?>
                           <p><a href="login.php" role="button" type="submit" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                            }
                            else{
                                if(check_if_added_to_cart(7)){
                                    ?><a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>;
                                    <?php
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div></div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="#"><img src="watch3.jpg" alt="Responsive image" class="adjust_1"></a>
                        
                    <div class="caption">
                        <h3>Favre Leuba Sky</h3>
                        <p>Price: Rs.258100.00</p>
                    </div>
                        <?php
                            if(!isset($_SESSION['email_id'])){
                                ?>
                           <p><a href="login.php" role="button" type="submit" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                            }
                            else{
                                if(check_if_added_to_cart(8)){
                                    ?><a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>;
                                    <?php
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div></div></div>
                
                
                <div class="row text-center">
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="#"><img src="shirt.jpg" alt="Responsive image" class="adjust_1"></a>
                    <div class="caption">
                        <h3>H&W</h3>
                        <p>Price: Rs.8000.00</p>
                        </div>
                        <?php
                            if(!isset($_SESSION['email_id'])){
                                ?>
                           <p><a href="login.php" role="button" type="submit" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                            }
                            else{
                                if(check_if_added_to_cart(9)){
                                    ?><a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>;
                                    <?php
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div></div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="#"><img src="shirt1.jpg" alt="Responsive image" class="adjust_1"></a>
                        
                    <div class="caption">
                        <h3>Louis Philippe</h3>
                        <p>Price: Rs.1000.00</p>
                        
                    </div>
                        <?php
                            if(!isset($_SESSION['email_id'])){
                                ?>
                           <p><a href="login.php" role="button" type="submit" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                            }
                            else{
                                if(check_if_added_to_cart(10)){
                                    ?><a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>;
                                    <?php
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div></div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="#"><img src="shirt2.jpg" alt="Responsive image" class="adjust_1"></a>
                        
                    <div class="caption">
                        <h3>Wrangler</h3>
                        <p>Price: Rs.1800.00</p>
                    </div>
                       <?php
                            if(!isset($_SESSION['email_id'])){
                                ?>
                           <p><a href="login.php" role="button" type="submit" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                            }
                            else{
                                if(check_if_added_to_cart(11)){
                                    ?><a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>;
                                    <?php
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div></div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="#"><img src="shirt3.jpg" alt="Responsive image" class="adjust_1"></a>
                        
                    <div class="caption">
                        <h3>UCB</h3>
                        <p>Price: Rs.1900.00</p>
                    </div>
                        <?php
                            if(!isset($_SESSION['email_id'])){
                                ?>
                           <p><a href="login.php" role="button" type="submit" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                            }
                            else{
                                if(check_if_added_to_cart(12)){
                                    ?><a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>;
                                    <?php
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div></div></div>
                
                
        </div>
        
       <?php
       include 'C:\wamp64\www\E_Commerce_Project\includes\footer.php';
        ?>
                
    </body>
</html>        
    </body>
</html>


