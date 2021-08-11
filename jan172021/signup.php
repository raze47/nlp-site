<?php include('serverNLP.php') ?>

<?php 
    $address = "";
    echo "Current PHP Version: ".phpversion();
    echo "\n";
    echo "\r\nFirst name: ".$_POST['first_reg'];
    echo "\r\nMiddle name: ".$_POST['middle_reg'];
    echo "\r\nSurame: ".$_POST['sur_reg'];
    echo "\r\nAddress: ".$_POST['address_input'];
    echo "\r\nStreet1: ".$_POST['street1_reg'];
    echo "\r\nStreet2: ".$_POST['street2_reg'];
    echo "\r\nCity: ".$_POST['city_reg'];
    echo "\r\nState/Province: ".$_POST['state_province_reg'];
    echo "\r\nCountry: ".$_POST['country_reg'];
    echo "\r\nZip/Postal: ".$_POST['zip_postal_reg'];
    echo "\r\nEmail: ".$_POST['email_reg'];
    echo "\r\nPassword: ".$_POST['password_reg'];
    echo "\r\nConfirm Password: ".$_POST['re_password_reg'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>NLP-UI_ver2</title>
    <meta name="twitter:title" content="PUP | Natural Language Processing">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="Logo.png">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <section class="d-flex flex-column justify-content-between" id="sign-up">
        <div id="nlp-top">
            <nav class="navbar navbar-light navbar-expand-md fixed-top" style="background: #ffffff;">
                <div class="container"><img id="nlp-logo" src="Logo.png" width="75px" height="75px"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse flex-grow-1 justify-content-between" id="navcol-1">
                        <ul class="nav navbar-nav flex-grow-1 justify-content-between mx-auto" id="nav-left">
                            <li class="nav-item" id="home"><a class="nav-link" href="Home.php" style="color: #9e0000;font-family: Montserrat, sans-serif;"><strong>home</strong></a></li>
                            <li class="nav-item"><a class="nav-link active" style="color: #9e0000;font-family: Montserrat, sans-serif;" href="Publications.php"><strong>publications</strong></a></li>
                            <li class="nav-item"><a class="nav-link active" href="#" style="color: #9e0000;font-family: Montserrat, sans-serif;"><strong>software</strong></a></li>
                            <li class="nav-item" id="about-us"><a class="nav-link active" href="Main.php" style="color: #9e0000;font-family: Montserrat, sans-serif;"><strong>about us</strong></a></li>
                        </ul>
                        <ul class="nav navbar-nav d-lg-flex flex-grow-1 justify-content-between ml-auto justify-content-lg-end" id="nav-right">
                            <li class="nav-item" id="log-in"><a class="nav-link active" style="color: #9e0000;font-family: Montserrat, sans-serif;" href="Login.php"><strong>log in</strong></a></li>
                            <li class="nav-item d-none d-print-inline-block d-md-inline-block d-lg-inline-block d-xl-inline-block"><a class="nav-link" id="separator" style="color: #9e0000;font-family: Montserrat, sans-serif;cursor: default;"><strong>|</strong></a></li>
                            <li class="nav-item"><a class="nav-link active" href="Signup.php" style="color: #9e0000;font-family: Montserrat, sans-serif;"><strong>sign up</strong></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="card" id="maroon-top"><img class="card-img w-100 d-block" src="PUP_school_colors.png" width="100%" height="50px">
                <div class="card-img-overlay d-flex justify-content-start align-items-center">
                    <h1 class="text-left d-none d-print-inline float-none d-sm-inline float-sm-left d-md-inline float-md-left d-lg-inline float-lg-left d-xl-inline float-xl-left justify-content-md-end" id="welcome" style="color: #ffff;font-family: Montserrat, sans-serif;font-size: 35px;font-weight: 500;font-style: normal;">Contact Information</h1>
                    <h1 class="text-left d-print-none float-none d-sm-none d-md-none d-lg-none d-xl-none justify-content-md-end" id="welcome-1" style="color: #ffff;font-family: Montserrat, sans-serif;font-size: 25px;font-weight: 500;font-style: normal;">Contact Information</h1>
                </div>
            </div>
        </div>
        <div id="nlp-body"><img id="pylon-top" src="PUP_Mabini_Campus_-_pylon_(side_view)_(PUP,_Santa_Mesa,_Manila)(2018-03-06).jpg" width="100%" style="filter: brightness(126%);">
            <div class="container" id="small-screens" style="font-family: Montserrat, sans-serif;font-size: 18px;">
                <div class="col" id="create-acc">
                    <h4 id="create-header" style="font-family: Montserrat, sans-serif;color: #9e0000;"><strong>Create an account</strong></h4>
                </div>
                <form action="" method="post">
                    <div class="col">
                        <h5 id="first-name">First Name</h5><input type="text" id="fn-input" name="first_reg">
                    </div>
                    <div class="col">
                        <h5 id="middle-name">Middle Name</h5><input type="text" id="mn-input" name="middle_reg">
                    </div>
                    <div class="col">
                        <h5 id="surname">Surname</h5><input type="text" id="sn-input" name="sur_reg">
                    </div>
                    <div class="col">
                        <h5 id="address">Address</h5>

                        <select name="address_input" id="address-type">
                            <option value="" disabled selected>Choose option</option>
                            <option value="Home">Home</option>
                            <option value="Office">Office</option>
                            <option value="Campus">Campus</option>
                        </select>
                    </div>
                    <div class="col">
                        <h5 id="street1">Street 1</h5><input type="text" id="s1-input" name="street1_reg">
                    </div>
                    <div class="col">
                        <h5 id="street2">Street 2</h5><input type="text" id="s2-input" name="street2_reg">
                    </div>
                    <div class="col">
                        <h5 id="city">City</h5><input type="text" id="city-input" name="city_reg">
                    </div>
                    <div class="col">
                        <h5 id="state-prov">State/Province</h5><input type="text" id="stateprov-input" name="state_province_reg">
                    </div>
                    <div class="col">
                        <h5 id="country">Country</h5><input type="text" id="country-input" name="country_reg">
                    </div>
                    <div class="col">
                        <h5 id="zip-postal">Zip/Postal</h5><input type="text" id="zip-input" name="zip_postal_reg">
                    </div>
                    <div class="col">
                        <h5 id="email-add">Email Address</h5><input type="text" id="emailadd-input" name="email_reg">
                    </div>
                    <div class="col">
                        <h5 id="new-pass">New Password</h5><input type="password" id="pass-input" name="password_reg">
                    </div>
                    <div class="col">
                        <h5 id="new-passRE">Re-type New Password</h5><input type="password" id="RTpass-input" name="re_password_reg">
                    </div><a> <input class="btn btn-primary" role="button" id="create-button" style="font-family: Montserrat, sans-serif;background: #9e0000;" href="Signup.php" type="submit" name="register_user"  value="Create Account →"></input></a>
                </form>
            </div>
        </div>
        <div id="nlp-bottom" style="background: #ffffff;">
            <div class="card d-xl-flex justify-content-xl-center align-items-xl-center" id="nlp-ribbon" style="background: rgb(255,255,255);text-align: center;"><img class="card-img w-100 d-block" src="PUP_school_colors.png" width="100%" height="30px">
                <div id="footer-images" style="background: #ffffff;">
                    <div class="container d-flex d-md-flex justify-content-center justify-content-md-center"><img id="pup-logo" src="logo.png" width="70px" height="70px"><img src="CCIS Logo.png" width="70px" height="70px"></div>
                    <h6 id="all-rights" style="font-family: Montserrat, sans-serif;font-weight: normal;font-style: normal;"><strong>© 2020&nbsp;</strong>All rights reserved.</h6>
                </div>
            </div>
        </div>
    </section>

    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
    <script id="bs-live-reload" data-sseport="55844" data-lastchange="1610454663943" src="/js/livereload.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>