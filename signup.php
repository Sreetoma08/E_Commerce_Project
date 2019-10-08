
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="Bootstrap/bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="Bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index.css"> 
    </head>
    <body>
        <?php
        include 'C:\wamp64\www\E_Commerce_Project\includes\common.php';
        include 'C:\wamp64\www\E_Commerce_Project\includes\header.php';
        ?>
    
       
        <div class="container con-style">
            <div class="row row-style">
                <div class="col-xs-6 col-xs-offset-3">
                    <h2>SIGN UP</h2>
                            
                    <form method="POST" action="signup_script.php">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="name" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control input-lg" name="email" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                </div>
                                  <div class="form-group">  
                                      <input type="password" class="form-control input-lg" name="password" placeholder="Password" required pattern=".{6,}">
                                  </div>
                                <div class="form-group">  
                                    <input type="number" class="form-control input-lg" name="contact" placeholder="Contact" required>
                                  </div>
                                <div class="form-group">  
                                    <input type="text" class="form-control input-lg" name="city" placeholder="City" required>
                                  </div>
                                <div class="form-group">  
                                    <input type="text" class="form-control input-lg" name="address" placeholder="Address" required>
                                  </div>
                                <div class="form-group">    
                                <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                            </div>
                    </div>
                    </div>
                
       
        
        <?php
       include 'C:\wamp64\www\E_Commerce_Project\includes\footer.php';
         ?>
        </body>
        
</html>
