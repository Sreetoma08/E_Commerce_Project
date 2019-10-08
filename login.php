<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="Bootstrap/bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="Bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index.css">    
    
    <body>
        <?php
        include 'C:\wamp64\www\E_Commerce_Project\includes\common.php';
        include 'C:\wamp64\www\E_Commerce_Project\includes\header.php';
        ?>
     
        <div class="container con-style">
            <div class="row row-style">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <p class="p_text">LOGIN</p>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
                            <form method="POST" action="login_submit.php">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control input-lg" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">    
                                <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
            </div>
        </div>
              
        <?php
        include 'C:\wamp64\www\E_Commerce_Project\includes\footer.php';
        ?>
        
    </body>
</html>



