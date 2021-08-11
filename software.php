<?php include('serverNLP.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>NLP-UI</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <section id="software">
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
                    <h1 class="text-left d-md-flex justify-content-md-end" id="pub-header" style="color: #ffff;font-family: Montserrat, sans-serif;font-size: 20px;font-weight: 500;font-style: normal;">Language Tools</h1>
                </div>
            </div>
        </div>
        <?php if(isset($_SESSION['success'])): ?>
        <div id="nlp-body">
            <div class="container" id="results-panel" style="background: #ffffff;">
                <div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1" style="color: #9e0000;font-family: Montserrat, sans-serif;font-size: 12px;"><strong>Tagalog</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-2" style="font-size: 12px;color: #9e0000;"><strong>Cebuano</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-3" style="color: #9e0000;font-size: 12px;"><strong>Hiligaynon</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-4" style="font-size: 12px;color: #9e0000;"><strong>Bicolano</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-5" style="font-size: 12px;color: #9e0000;"><strong>English</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-6" style="font-size: 12px;color: #9e0000;"><strong>Others</strong></a></li>
                    
                    </ul>
                    <div class="tab-content">
                        <div class="flex-sm-fill text-sm-left tab-pane active" style="padding-left: 2em; font-size: 15px;font-family: Montserrat, sans-serif;background: #f5f5f5;" role="tabpanel" id="tab-1">
                             <!--admin confirmation FILIPINO-->
                            <?php if(strcmp($_SESSION['admin'], "NLP Admin") == 0):?>
                            <h6 id="upload-heading" style="font-family: Montserrat, sans-serif;color: #000000;text-align: center;">Upload files for verified accounts</h6>
                            <form class="text-center" method="post" action="software.php" enctype="multipart/form-data">
                                    <input type="file" name="upload_filipino" style="font-family: Montserrat, sans-serif;color: #000000;text-align: center;font-size: 14px;">
                                    <button type="submit" name ="save_filipino" id="save_filipino" class="btn btn-primary btn-sm text-center align-self-center" style="background: #9e0000;border-style: solid;border-color: #9e0000;">Upload</button> 
                            </form>
                            <?php endif;?>


                            <?php 
                            //present lang ng laman ng publications
                            $db = mysqli_connect('localhost', 'root', '', 'nlp') or die("Could not connect to database");
                            $sql_filipino = "SELECT * FROM filipino_tools";
                            $result = mysqli_query($db, $sql_filipino);

                            if (!empty($result) && $result->num_rows > 0) {
                          
                                // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                    //    echo "id: " . $row["publications_id"]. " - Name: " . $row["name"]. " " . $row['size']. "<br>";
                                        echo "<a href='file_handling/uploaded_tools/filipino/".$row['name']."' download>". $row["name"]."</a><br>";
                                       
                                    }
                                } 
                                else {
                                echo "0 results";
                                }
                            ?> 

                        </div>
                        <div class="flex-sm-fill text-sm-left tab-pane" style="padding-left: 2em; font-size: 15px;font-family: Montserrat, sans-serif;background: #f5f5f5;" role="tabpanel"  id="tab-2">
                             <!--admin confirmation cebuano-->
                            <?php if(strcmp($_SESSION['admin'], "NLP Admin") == 0):?>
                            <h6 id="upload-heading" style="font-family: Montserrat, sans-serif;color: #000000;text-align: center;">Upload files for verified accounts</h6>
                            <form class="text-center" method="post" action="software.php" enctype="multipart/form-data">
                                    <input type="file" name="upload_cebuano" style="font-family: Montserrat, sans-serif;color: #000000;text-align: center;font-size: 14px;">
                                    <button type="submit" name ="save_cebuano" id="save_cebuano" class="btn btn-primary btn-sm text-center align-self-center" style="background: #9e0000;border-style: solid;border-color: #9e0000;">Upload</button> 
                            </form>
                            <?php endif;?>


                            <?php 
                            //present lang ng laman ng publications
                            $db = mysqli_connect('localhost', 'root', '', 'nlp') or die("Could not connect to database");
                            $sql_cebuano = "SELECT * FROM cebuano_tools";
                            $result = mysqli_query($db, $sql_cebuano);

                            if (!empty($result) && $result->num_rows > 0) {
                          
                                // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                    //    echo "id: " . $row["publications_id"]. " - Name: " . $row["name"]. " " . $row['size']. "<br>";
                                        echo "<a href='file_handling/uploaded_tools/cebuano/".$row['name']."' download>". $row["name"]."</a><br>";
                                       
                                    }
                                } 
                                else {
                                echo "0 results";
                                }
                            ?> 

                        </div>
                        <div class="flex-sm-fill text-sm-left tab-pane" style="padding-left: 2em; font-size: 15px;font-family: Montserrat, sans-serif;background: #f5f5f5;" role="tabpanel" id="tab-3">
                            <!--admin confirmation hiligaynon-->
                            <?php if(strcmp($_SESSION['admin'], "NLP Admin") == 0):?>
                            <h6 id="upload-heading" style="font-family: Montserrat, sans-serif;color: #000000;text-align: center;">Upload files for verified accounts</h6>
                            <form class="text-center" method="post" action="software.php" enctype="multipart/form-data">
                                    <input type="file" name="upload_hiligaynon" style="font-family: Montserrat, sans-serif;color: #000000;text-align: center;font-size: 14px;">
                                    <button type="submit" name ="save_hiligaynon" id="save_hiligaynon" class="btn btn-primary btn-sm text-center align-self-center" style="background: #9e0000;border-style: solid;border-color: #9e0000;">Upload</button> 
                            </form>
                            <?php endif;?>


                            <?php 
                            //present lang ng laman ng publications
                            $db = mysqli_connect('localhost', 'root', '', 'nlp') or die("Could not connect to database");
                            $sql_hiligaynon = "SELECT * FROM hiligaynon_tools";
                            $result = mysqli_query($db, $sql_hiligaynon);

                            if (!empty($result) && $result->num_rows > 0) {
                          
                                // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                    //    echo "id: " . $row["publications_id"]. " - Name: " . $row["name"]. " " . $row['size']. "<br>";
                                        echo "<a href='file_handling/uploaded_tools/hiligaynon/".$row['name']."' download>". $row["name"]."</a><br>";
                                       
                                    }
                                } 
                                else {
                                echo "0 results";
                                }
                            ?>
                        </div>
                        <div class="flex-sm-fill text-sm-left tab-pane" style="padding-left: 2em; font-size: 15px;font-family: Montserrat, sans-serif;background: #f5f5f5;" role="tabpanel" id="tab-4">
                            <!--admin confirmation bicolano-->
                            <?php if(strcmp($_SESSION['admin'], "NLP Admin") == 0):?>
                            <h6 id="upload-heading" style="font-family: Montserrat, sans-serif;color: #000000;text-align: center;">Upload files for verified accounts</h6>
                            <form class="text-center" method="post" action="software.php" enctype="multipart/form-data">
                                    <input type="file" name="upload_bicolano" style="font-family: Montserrat, sans-serif;color: #000000;text-align: center;font-size: 14px;">
                                    <button type="submit" name ="save_bicolano" id="save_bicolano" class="btn btn-primary btn-sm text-center align-self-center" style="background: #9e0000;border-style: solid;border-color: #9e0000;">Upload</button> 
                            </form>
                            <?php endif;?>


                            <?php 
                            //present lang ng laman ng publications
                            $db = mysqli_connect('localhost', 'root', '', 'nlp') or die("Could not connect to database");
                            $sql_bicolano = "SELECT * FROM bicolano_tools";
                            $result = mysqli_query($db, $sql_bicolano);

                            if (!empty($result) && $result->num_rows > 0) {
                          
                                // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                    //    echo "id: " . $row["publications_id"]. " - Name: " . $row["name"]. " " . $row['size']. "<br>";
                                        echo "<a href='file_handling/uploaded_tools/bicolano/".$row['name']."' download>". $row["name"]."</a><br>";
                                       
                                    }
                                } 
                                else {
                                echo "0 results";
                                }
                            ?>

                        </div>

                        <div class="flex-sm-fill text-sm-left tab-pane" style="padding-left: 2em; font-size: 15px;font-family: Montserrat, sans-serif;background: #f5f5f5;" role="tabpanel" id="tab-5">
                             <!--admin confirmation ENGLISH-->
                            <?php if(strcmp($_SESSION['admin'], "NLP Admin") == 0):?>
                            <h6 id="upload-heading" style="font-family: Montserrat, sans-serif;color: #000000;text-align: center;">Upload files for verified accounts</h6>
                            <form class="text-center" method="post" action="software.php" enctype="multipart/form-data">
                                    <input type="file" name="upload_english" style="font-family: Montserrat, sans-serif;color: #000000;text-align: center;font-size: 14px;">
                                    <button type="submit" name ="save_english" id="save_english" class="btn btn-primary btn-sm text-center align-self-center" style="background: #9e0000;border-style: solid;border-color: #9e0000;">Upload</button> 
                            </form>
                            <?php endif;?>


                            <?php 
                            //present lang ng laman ng publications
                            $db = mysqli_connect('localhost', 'root', '', 'nlp') or die("Could not connect to database");
                            $sql_english = "SELECT * FROM english_tools";
                            $result = mysqli_query($db, $sql_english);

                            if (!empty($result) && $result->num_rows > 0) {
                          
                                // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                    //    echo "id: " . $row["publications_id"]. " - Name: " . $row["name"]. " " . $row['size']. "<br>";
                                        echo "<a href='file_handling/uploaded_tools/english/".$row['name']."' download>". $row["name"]."</a><br>";
                                       
                                    }
                                } 
                                else {
                                echo "0 results";
                                }
                            ?> 

                        </div>


                        <div class="flex-sm-fill text-sm-left tab-pane" style="padding-left: 2em; font-size: 15px;font-family: Montserrat, sans-serif;background: #f5f5f5;" role="tabpanel" id="tab-6">
                             <!--admin confirmation OTHERSA-->
                            <?php if(strcmp($_SESSION['admin'], "NLP Admin") == 0):?>
                            <h6 id="upload-heading" style="font-family: Montserrat, sans-serif;color: #000000;text-align: center;">Upload files for verified accounts</h6>
                            <form class="text-center" method="post" action="software.php" enctype="multipart/form-data">
                                    <input type="file" name="upload_others" style="font-family: Montserrat, sans-serif;color: #000000;text-align: center;font-size: 14px;">
                                    <button type="submit" name ="save_others" id="save_others" class="btn btn-primary btn-sm text-center align-self-center" style="background: #9e0000;border-style: solid;border-color: #9e0000;">Upload</button> 
                            </form>
                            <?php endif;?>


                            <?php 
                            //present lang ng laman ng publications
                            $db = mysqli_connect('localhost', 'root', '', 'nlp') or die("Could not connect to database");
                            $sql_others = "SELECT * FROM others_tools";
                            $result = mysqli_query($db, $sql_others);

                            if (!empty($result) && $result->num_rows > 0) {
                          
                                // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                    //    echo "id: " . $row["publications_id"]. " - Name: " . $row["name"]. " " . $row['size']. "<br>";
                                        echo "<a href='file_handling/uploaded_tools/others/".$row['name']."' download>". $row["name"]."</a><br>";
                                       
                                    }
                                } 
                                else {
                                echo "0 results";
                                }
                            ?> 

                        </div>

                        






                    </div>
                </div>
            </div>
        </div>
        <?php endif;?>
        <div id="nlp-bottom" style="background: #ffffff;">
            <div class="card d-xl-flex justify-content-xl-center align-items-xl-center" id="nlp-ribbon" style="background: rgb(255,255,255);text-align: center;border-style: none;"><img class="card-img w-100 d-block" src="assets/img/PUP_school_colors.png" width="100%" height="30px">
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