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
    <nav class="nav navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-nav">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <p class="navbar-brand"> Digital Links</p>
                
            </div>
            <div class="collapse navbar-collapse" id="navbar-nav">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="home.php">Home</a></li>
                    <li><a href="advertisement.php">Advertisement</a></li>
                    <li><a href="contact.php">Contacts</a></li>
                    <li>
                        <form action="logout.php" method="post" class="form" onsubmit="return validate">
                            <input type="Submit" name="Logout" value="Logout" class="btn btn-info">
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>

    <!--carousel area-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="carousel slide" data-ride="carousel" id="myslider">
                    <!--                   indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#myslider" data-slide-to="0" class="active"></li>
                        <li data-target="#myslider" data-slide-to="1"></li>
                        <li data-target="#myslider" data-slide-to="2"></li>
                    </ol>

                    <!--              image wrappers-->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="home" src="images/reg.jpg" alt="image">
                            <div class="carousel-caption">
                                <p class="animated rubberBand">. Experience a Whole "New Erra" of Doing Advertisment.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img class="home" src="images/reg.jpg" alt="image">
                            <div class="carousel-caption">
                                <p class="animated swing">. "Today's World Only Belongs to Those who can Create,Innovate & Develop".</p>
                            </div>
                        </div>
                        <div class="item">
                            <img class="home" src="images/reg.jpg" alt="image">
                            <div class="carousel-caption">
                                <p class="animated flip">. "Today's World Only Belongs to Those who can Create,Innovate & Develop".</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <p class="reasons">As a Technology Company, We've Discovered that the Advertising industry has been doing things in the same pattern and we've decided to <b class="chars">Think, Act and communicate </b> differently from everyone else by using our skills in Technology to bring you the new 'era' of Advertisement.So all we did was to codify it and came with the name known as "The Digital Links". </p>
    </div>
    
<!--    final view-->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="why">
                    <h1 class="about1" id="double-underline">Why Digital Village</h1>
                    <p class="detailing">The main purpose of this platform will be to link business Owners/Enterprenuers to clients from a wide range of services and products and reducing the human effort of having to go to a shop to look for things that may at times be unavailable. With this platform, we aim to reach a great deal of number of people compared to the traditional mehods of using magazines where they are only distributed in shops leaving quite a huge chunk of people not having access to advertised items</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="what">
                    <h1 class="about2" id="double-underline">What Digital Links Does</h1>
                    <p class="detailing2">We majorly link clients to business owners to see what they need and also businesses to compare prices between one another and also create a platform where all can view products as compared to the traditional method where only few people have acccess to the magazines and it takes longer to peruse each and every page to look for what you want.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="how">
                    <h1 class="about1" id="double-underline">How Digital Links Works</h1>
                    <p class="detailing">So majority of our new clients ask how we do it and the answer is simple: "reach everbody you can", since majority of the world's population have access to either computers or smartphones which they use to access internet and this will enable more people to view products and services being offered in the different fields of proffessions.</p>
                </div>
            </div>
            
        </div>
    </div>
</div>

<br>


    <!--footer-->

    <div class="nav navbar-inverse navbar-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class=quality>100%
                            <br> RESPONSIVE</div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class=quality>24 HRS
                            <br> ONLINE</div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class=quality>100%
                            <br> QUALITY</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
     <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <img src="images/reg.jpg" alt="" class="img-responsive" id="reg_img">
                    <div class="reg_text">Digital Links is Better when <br> You have an Account
                    <br>
                    <br>
                    <div class="get">Get Yourself One</div>
                    </div>
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