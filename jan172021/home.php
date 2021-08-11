<?php include('serverNLP.php') ?>
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
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <section class="d-flex flex-column justify-content-between" id="homepage">
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
                 
                     <h1 class="text-left d-md-flex justify-content-md-end" id="welcome" style="color: #ffff;font-family: Montserrat, sans-serif;font-size: 35px;font-weight: 500;font-style: normal;">Welcome!&nbsp;
                     <strong>
                     <?php 
                        if(isset($_SESSION['success'])):
                            echo $_SESSION['email_success'];
                        else:
                            echo "";
                        endif;
                     ?><strong></h1>
                  


                </div>
            </div>
        </div>
        <div id="nlp-body">
            <div class="container">
                <h4 id="nlp-team" style="color: #000000;font-family: Montserrat, sans-serif;font-weight: normal;font-style: normal;"><strong>The NLP Team in PUP</strong></h4>
                <h6 id="paragraph-1" style="font-family: Montserrat, sans-serif;text-align: justify;font-weight: 450;font-style: normal;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sagittis eros nec mi blandit lobortis. Pellentesque rhoncus orci at purus scelerisque blandit. Nullam ultricies ipsum in felis cursus, sit amet lobortis lectus dapibus. Vivamus sodales purus quis ex laoreet, vitae faucibus tellus semper. Praesent consequat metus eget ligula hendrerit, nec scelerisque est volutpat. Nunc nec diam purus. Donec consequat fermentum eros ut cursus. Donec leo neque, fringilla eget volutpat et, varius nec diam. Ut aliquam blandit lobortis. Proin a fermentum augue. Sed finibus, lacus ut scelerisque pellentesque, nulla ex dignissim libero, at vulputate est nisi in turpis. Curabitur sagittis, sapien eu lacinia porttitor, arcu libero luctus arcu, et ultrices mi tellus ac urna. Mauris auctor dui felis. Proin facilisis consectetur metus in auctor. Maecenas leo ante, vulputate quis vehicula quis, faucibus eget lorem. Fusce gravida erat nec diam congue bibendum.<br><br></h6><img class="img-fluid" id="pup-bldg" src="20170524-PUP-academic-year_main.jpg" width="300px" height="150px">
                <h6 id="paragraph-2" style="font-family: Montserrat, sans-serif;text-align: justify;font-weight: 450;font-style: normal;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sagittis eros nec mi blandit lobortis. Pellentesque rhoncus orci at purus scelerisque blandit. Nullam ultricies ipsum in felis cursus, sit amet lobortis lectus dapibus. Vivamus sodales purus quis ex laoreet, vitae faucibus tellus semper. Praesent consequat metus eget ligula hendrerit, nec scelerisque est volutpat. Nunc nec diam purus. Donec consequat fermentum eros ut cursus. Donec leo neque, fringilla eget volutpat et, varius nec diam. Ut aliquam blandit lobortis. Proin a fermentum augue. Sed finibus, lacus ut scelerisque pellentesque, nulla ex dignissim libero, at vulputate est nisi in turpis. Curabitur sagittis, sapien eu lacinia porttitor, arcu libero luctus arcu, et ultrices mi tellus ac urna. Mauris auctor dui felis. Proin facilisis consectetur metus in auctor. Maecenas leo ante, vulputate quis vehicula quis, faucibus eget lorem. Fusce gravida erat nec diam congue bibendum.<br><br></h6>
            </div>
        </div>
        <div id="nlp-bottom" style="background: #ffffff;">
            <div class="card d-xl-flex justify-content-xl-center align-items-xl-center" id="nlp-ribbon" style="background: rgb(255,255,255);text-align: center;"><img class="card-img w-100 d-block" src="PUP_school_colors.png" width="100%" height="30px">
                <div id="footer-images" style="background: #ffffff;">
                    <div class="container d-flex d-md-flex justify-content-center justify-content-md-center"><img id="pup-logo" src="Logo.png" width="70px" height="70px"><img src="CCIS Logo.png" width="70px" height="70px"></div>
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