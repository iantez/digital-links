<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Digital links</title>
    <meta name="viewport" content="width=device-width" initial-scale="1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <script src="js/custom.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
   
   <i class="fa fa-paint-brush" aria-hidden="true" id="icons"></i>
   
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <img src="images/reg.jpg" alt="" class="img-responsive" id="reg_img">
                    <div class="reg_text">Digital Links is Better when <br> You have an Account</div>
                    <br>
                    <br>
                    <div class="get">Get Yourself One</div>
                </div>
            

                <!--               registration part-->

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" id="reg_box">
                    <img src="images/logo.png" alt="" class="reg_logo">
                    <h3 id="reg_form">Please Register in the Form Below</h3>
                    <form action="reg.php" method="POST" class="form" onsubmit="return validate()" name="vform">
                        <input type="text" name="username" class="form-control" placeholder="Username">
                        <div id="name_error" class="val_error"></div>
                        <br>
                        <input type="text" name="email" class="form-control" placeholder="Email Address">
                        <div id="mail_error" class="val_error"></div>
                        <br>
                        <input type="text" name="tel" class="form-control" placeholder="Phone No">
                        <div id="phone_error" class="val_error"></div>
                        <br>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div id="pass_error" class="val_error"></div>
                        <br>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="submit" name="register" value="Register" class="btn btn-primary">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

                            <a href="login.php">
                                <button type="button" class="btn btn-primary">login</button>
                            </a>
                        </div>
                    </form>
                    <br>
                    <hr>
                    <h3 id="reg_form">Already a User? Click on Login</h3>
                </div>
            </div>
            <br>
        </div>
    </div>

</body>

</html>