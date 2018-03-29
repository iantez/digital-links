<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Digital links</title>
    <meta name="viewport" content="width=device-width" initial-scale="1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="js/custom.js"></script>
    <script src="js/prefix.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-8">
                    <img src="images/online.jpg" alt="" class="img-responsive" id="reg_img">
                    <div class="reg_text">Discover the Most Efficient <br> Way of Advertising
                    
                    
                    </div>
                </div>
                <div class="col-lg-4" id="reg_box">
                    <img src="images/logo.png" alt="" class="reg_logo">
                    <h3 id="reg_form">Login below</h3>
                    <form action="logins.php" method="POST" class="form" onsubmit="return validate()">
                        <input type="text" name="username" class="form-control" placeholder="Username">
                        <br>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <br>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <a href="index.php">
                                <button type="button" class="btn btn-primary">Register</button>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

                           <input type="submit" name="login" value="Login" class="btn btn-primary">
                        </div>
                    </form>
                    <br>
                    <h3 id="reg_form">Do not have an account, Click on register</h3>

                </div>
            </div>
        </div>


    </div>


</body>

</html>