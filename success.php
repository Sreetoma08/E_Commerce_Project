

<html>
    <head>
        <title>Success</title>
        <link rel="stylesheet" href="Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="Bootstrap/bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="Bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index.css">   
    </head>
    <body>
        <?php
        include 'C:\wamp64\www\E_Commerce_Project\includes\common.php';
        $confirm_query="update users_items set status='Confirmed' where user_id='$_SESSION[user_id]'"; 
        $confirm_query_result= mysqli_query($con, $confirm_query) or die(mysqli_error($con));
        ?>
        <div class="container">
            <h3>Your order is confirmed. Thank you for shopping with us.<a href="post_login_products.php"><u>Click here</u></a> to purchase any other item.</h3>
        </div>
    </body>
</html>
