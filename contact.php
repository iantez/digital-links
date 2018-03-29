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
    <br>

    <div class="container">
        <div class=row>
            <div class="col-lg-12">
                <div class="col-lg-4 col-md-4 col-sm-6" id="contact_area">
                    <div class="contact_title">Contact Us</div>
                    <hr>
                    <div class="contact_details">Tel: 0726 262 749 || 0747 262 749
                        <br> Email:Digitallinks@gmail.com
                        <br> Website: www.digitallinks.co.ke
                        <br> Location: Digital Suites

                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-6" id="contact_area2">
                    <div class="contact_title2">Get in Touch with Us </div>
                    <hr>
                    <div class="contact_details">Tel: 0726 262 749 || 0747 262 749
                        <br> Email:Digitallinks@gmail.com
                        <br> Website: www.digitallinks.co.ke
                        <br> Location: Digital Suites

                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>