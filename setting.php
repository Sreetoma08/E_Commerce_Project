<!DOCTYPE html>

<html>
    <head>
        <title>Settings</title>
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
                    <h2>Change Password</h2>
                            
                    <form action="setting_script.php" method="POST">
                                <div class="form-group">
                                    <input type="password" class="form-control input-lg" name="old_password" placeholder="Old Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control input-lg" name="new_password" placeholder="New Password" pattern=".{6,}">
                                </div>
                                  <div class="form-group">  
                                <input type="password" class="form-control input-lg" name="retype_new_password" placeholder="Re-type New Password" pattern=".{6,}">
                                  </div>
                                <div class="form-group">    
                                <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
                                </div></form>
                </div>
            </div>
        </div>
    <footer class="navbar navbar-fixed-bottom">
        <div class="container"> 
            <p class="text-center">Copyright @ Lifestyle Store. All Rights Reserved | Contact Us: +9190000 00000.</p>
        </div>
     </footer>  
    </body>
</html>
