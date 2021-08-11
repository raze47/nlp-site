<?php include("serverNLP.php"); ?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>NLP-UI_ver2</title>
    <meta name="twitter:title" content="PUP | Natural Language Processing">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="Logo.png">
    <link rel="stylesheet" href="assets//bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <section id="nlp-applications">
    <div id="nlp-top">
    <nav class="navbar navbar-light navbar-expand-md fixed-top" style="background: #ffffff;">
                <div class="container"><img id="nlp-logo" src="assets/img/pup_nlp_logo.png" width="75px" height="75px"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse flex-grow-1 justify-content-between" id="navcol-1">
                        <ul class="navbar-nav flex-grow-1 justify-content-between mx-auto" id="nav-left">
                            <li class="nav-item"><a class="nav-link" href="Home.php" style="color: #9e0000;font-family: Montserrat, sans-serif;"><strong>home</strong></a></li>
                            <li class="nav-item"><a class="nav-link active" href="Publications.php" style="color: #9e0000;font-family: Montserrat, sans-serif;"><strong>publications</strong></a></li>
                            <li class="nav-item"><a class="nav-link active" href="software.php" style="color: #9e0000;font-family: Montserrat, sans-serif;"><strong>language tools</strong></a></li>
                            <li class="nav-item"><a class="nav-link" href="NLP_applications.php" style="color: rgb(158,0,0);"><strong>nlp applications</strong></a></li>
                            <li class="nav-item" id="about-us"><a class="nav-link active" style="color: #9e0000;font-family: Montserrat, sans-serif;" href="main.php"><strong>about us</strong></a></li>
                        </ul>
                        <ul class="navbar-nav d-lg-flex flex-grow-1 justify-content-between ml-auto justify-content-lg-end" id="nav-right">
                             <?php if(isset($_SESSION['success'])) : ?>
                                <li class="nav-item" id="log-in"><a class="nav-link active" style="color: #9e0000;font-family: Montserrat, sans-serif;" href="Logout.php"><strong>log out</strong></a></li>
                                <li class="nav-item d-none d-print-inline-block d-md-inline-block d-lg-inline-block d-xl-inline-block"><a class="nav-link" id="separator" style="color: #9e0000;font-family: Montserrat, sans-serif;cursor: default;"></a></li>
                            <?php else: ?>
                                <li class="nav-item" id="log-in"><a class="nav-link active" style="color: #9e0000;font-family: Montserrat, sans-serif;" href="Login.php"><strong>log in</strong></a></li>
                                <li class="nav-item d-none d-print-inline-block d-md-inline-block d-lg-inline-block d-xl-inline-block"><a class="nav-link" id="separator" style="color: #9e0000;font-family: Montserrat, sans-serif;cursor: default;"><strong>|</strong></a></li>
                                <li class="nav-item"><a class="nav-link active" href="Signup.php" style="color: #9e0000;font-family: Montserrat, sans-serif;"><strong>sign up</strong></a></li>
                            <?php endif ?>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="card" id="maroon-top"><img class="card-img w-100 d-block" src="assets/img/PUP_school_colors.png" width="100%" height="50px">
                <div class="card-img-overlay d-flex justify-content-start align-items-center">
                    <h1 class="text-left d-md-flex justify-content-md-end" id="pub-header" style="color: #ffff;font-family: Montserrat, sans-serif;font-size: 20px;font-weight: 500;font-style: normal;">NLP Applications</h1>
                </div>
            </div>
        </div>
                                

        <?php if(isset($_SESSION['success'])): ?>

            <!--admin confirmation-->
            <?php if(strcmp($_SESSION['admin'], "NLP Admin") == 0):?>
                        <h6 id="upload-heading" style="font-family: Montserrat, sans-serif;color: #000000;text-align: center;">Upload files for verified accounts</h6>
                        <form class="text-center" method="post" action="NLP_applications.php" enctype="multipart/form-data">
                                <input type="file" name="upload_app" style="font-family: Montserrat, sans-serif;color: #000000;text-align: center;font-size: 14px;">
                                <button type="submit" name ="save_app" id="save_app" class="btn btn-primary btn-sm text-center align-self-center" style="background: #9e0000;border-style: solid;border-color: #9e0000;">Upload</button> 
                        </form>
            <?php endif;?>





        <div id="nlp-body">
            <div class="container" id="results-panel" style="background: #ffffff;">
            <?php 
                 //present lang ng laman ng publications
                            
                 $db = mysqli_connect('localhost', 'root', '', 'nlp') or die("Could not connect to database");
                 $sql_app = "SELECT * FROM app_table";
                 $varint = 3;
                 $result = mysqli_query($db, $sql_app);

                 if (!empty($result) && $result->num_rows > 0) {
             
                     // output data of each row
                         while($row = $result->fetch_assoc()) {
                         //    echo "id: " . $row["publications_id"]. " - Name: " . $row["name"]. " " . $row['size']. "<br>";
                             echo "<p id='result-t1' style='font-size: 15px;font-family: Montserrat, sans-serif;background: #fccfcf;'><a href='file_handling/uploaded_tools/apps/".$row['name']."' download>". $row["name"]."</a></p><br>";
                         
                         }
                     } 
                     else {
                     echo "0 results";
                     }
                 
                 ?>                
            </div>
        </div>
        <?php endif;?>

        <div id="nlp-bottom" style="background: #ffffff;">
            <div class="card d-xl-flex justify-content-xl-center align-items-xl-center" id="nlp-ribbon" style="background: rgb(255,255,255);text-align: center;"><img class="card-img w-100 d-block" src="assets/img/PUP_school_colors.png" width="100%" height="30px">
                <div id="footer-images" style="background: #ffffff;">
                    <div class="container d-flex d-md-flex justify-content-center justify-content-md-center"><img id="pup-logo" src="assets/img/logo.png" width="70px" height="70px"><img src="assets/img/CCIS%20Logo.png" width="70px" height="70px"></div>
                    <h6 id="all-rights" style="font-family: Montserrat, sans-serif;font-weight: normal;font-style: normal;"><strong>© 2020&nbsp;</strong>All rights reserved.</h6>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
</body>

</html>