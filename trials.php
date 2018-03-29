<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width" initial-scale="1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="coll-lg-12">
                <div class="col-lg-8">
                    <img src="images/reg.jpg" alt="" class="img-responsive" id="mine">

                </div>
                <div class="col-lg-4 id="mine2>
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
                </div>
            </div>
        </div>
    </div>
</body>

</html>