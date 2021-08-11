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
    <section class="d-flex flex-column justify-content-between" id="about-us">
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
                    <h1 class="text-left d-md-flex justify-content-md-end" id="pub-header" style="color: #ffff;font-family: Montserrat, sans-serif;font-size: 20px;font-weight: 500;font-style: normal;">Meet the Team!</h1>
                </div>
            </div>
        </div>
        <div id="nlp-body">
            <div class="container" id="professors-container" style="background: #ffffff;">
                <h6 class="text-left" id="prof-title" style="font-family: Montserrat, sans-serif;font-size: 20px;color: rgb(65,70,75);">Professor</h6><img id="line-separator1" src="line.png" width="100%" height="10px"><img id="prof-img" src="download (3).jpeg">
                <h1 class="text-center" id="prof-name" style="font-family: Montserrat, sans-serif;font-size: 14px;color: rgb(65,70,75);text-align: center;">Prof. Ria A. Sagum</h1>
                <h1 class="text-center" id="prof-position" style="font-family: Montserrat, sans-serif;font-size: 10px;color: rgb(65,70,75);text-align: center;">Associate Professor</h1>
                <h1 class="text-center" id="prof-affiliate" style="font-family: Montserrat, sans-serif;font-size: 10px;color: rgb(65,70,75);text-align: center;">Polytechnic University of the Philippines</h1>
            </div>
            <div class="container names" id="contributors-panel" style="background: #ffffff;">
                <h6 class="text-left" id="contributors-title" style="font-family: Montserrat, sans-serif;font-size: 20px;color: rgb(65,70,75);">Contributors</h6><img id="line-separator2" src="line.png" width="100%" height="10px">
                <h1 class="text-left names" id="contributor-name1" style="font-family: Montserrat, sans-serif;font-size: 12px;color: rgb(65,70,75);text-align: center;">Maria Sophia Balita</h1>
                <h1 class="text-left names" id="contributor-name2" style="font-family: Montserrat, sans-serif;font-size: 12px;color: rgb(65,70,75);text-align: center;">Cedrick Dela Carcel</h1>
                <h1 class="text-left names" id="contributor-name-3" style="font-family: Montserrat, sans-serif;font-size: 12px;color: rgb(65,70,75);text-align: center;">Glenn Joshua Casupanan</h1>
                <h1 class="text-left names" id="contributor-name4" style="font-family: Montserrat, sans-serif;font-size: 12px;color: rgb(65,70,75);text-align: center;">Carl Joseph Cepe</h1>
                <h1 class="text-left names" id="contributor-name5" style="font-family: Montserrat, sans-serif;font-size: 12px;color: rgb(65,70,75);text-align: center;">Alissa Carla Chacon</h1>
                <h1 class="text-left names" id="contributor-name6" style="font-family: Montserrat, sans-serif;font-size: 12px;color: rgb(65,70,75);text-align: center;">Jorge Alexis Echanis</h1>
                <h1 class="text-left names" id="contributor-name7" style="font-family: Montserrat, sans-serif;font-size: 12px;color: rgb(65,70,75);text-align: center;">Carlos Elequin</h1>
                <h1 class="text-left names" id="contributor-name8" style="font-family: Montserrat, sans-serif;font-size: 12px;color: rgb(65,70,75);text-align: center;">Joash Edson Flores</h1>
                <h1 class="text-left names" id="contributor-name9" style="font-family: Montserrat, sans-serif;font-size: 12px;color: rgb(65,70,75);text-align: center;">Rudolph Vincent Sta. Maria</h1>
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