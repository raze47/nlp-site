<?php

    session_start();

    //Initializing variables

    $first_name = "";
    $middle_name= "";
    $sur_name = "";
    $address = "";
    $street1 = "";
    $street2 = "";
    $city = "";
    $state_province = "";
    $country = "";
    $zip_postal = "";
    $email = "";
    $password = "";
    $re_password = "";
    $errors = array();

    //connect to db

    $db = mysqli_connect('localhost', 'root', '', 'nlp') or die("Could not connect to database");

    //Register users


    if(isset($_POST['first_reg'])){
        $first_name = mysqli_real_escape_string($db, $_POST['first_reg']);
    }
    if(isset($_POST['middle_reg'])){
        $middle_name = mysqli_real_escape_string($db, $_POST['middle_reg']);
    }
    if(isset($_POST['sur_reg'])){
        $sur_name = mysqli_real_escape_string($db, $_POST['sur_reg']);
    }
    if(isset($_POST['address_input'])){
        $address = mysqli_real_escape_string($db, $_POST['address_input']);
    }
    if(isset($_POST['street1_reg'])){
        $street1 = mysqli_real_escape_string($db, $_POST['street1_reg']);
    }
    if(isset($_POST['street2_reg'])){
        $street2 = mysqli_real_escape_string($db, $_POST['street2_reg']);
    }
    if(isset($_POST['city_reg'])){
        $city= mysqli_real_escape_string($db, $_POST['city_reg']);
    }
    if(isset($_POST['state_province_reg'])){
        $state_province = mysqli_real_escape_string($db, $_POST['state_province_reg']);
    }
    if(isset($_POST['country_reg'])){
        $country = mysqli_real_escape_string($db, $_POST['country_reg']);
    }
    if(isset($_POST['zip_postal_reg'])){
        $zip_postal = mysqli_real_escape_string($db, $_POST['zip_postal_reg']);
    }
    if(isset($_POST['email_reg'])){
        $email = mysqli_real_escape_string($db, $_POST['email_reg']);
    }
    if(isset($_POST['password_reg'])){
        $password = mysqli_real_escape_string($db, $_POST['password_reg']);
    }
    if(isset($_POST['re_password_reg'])){
        $re_password = mysqli_real_escape_string($db, $_POST['re_password_reg']);
    }

    //form validation

    if(empty($_POST['first_reg'])){
        array_push($errors, "First name is required");
    }
    if(empty($_POST['middle_reg'])){
        array_push($errors, "Middle name is required");
    }
    if(empty($_POST['sur_reg'])){
        array_push($errors, "Surname is required");
    }
    if(empty($_POST['address_input'])){
        array_push($errors, "Address is required");
    }
    if(empty($_POST['street1_reg'])){
        array_push($errors, "Street 1 is required");
    }
    if(empty($_POST['street2_reg'])){
        array_push($errors, "Street 2 is required");
    }
    if(empty($_POST['city_reg'])){
        array_push($errors, "City is required");
    }
    if(empty($_POST['state_province_reg'])){
        array_push($errors, "State/province is required");
    }
    if(empty($_POST['country_reg'])){
        array_push($errors, "Country is required");
    }
    if(empty($_POST['zip_postal_reg'])){
        array_push($errors, "Zip/postal is required");
    }
    if(empty($_POST['email_reg'])){
        array_push($errors, "email is required");
    }
    if(empty($_POST['password_reg'])){
        array_push($errors, "Password is required");
    }
    if(empty($_POST['re_password_reg'])){
        array_push($errors, "Confirming is required");
    }
    if($password != $re_password){
        array_push($errors, "Password mismatch!");
    }

    //Already existing in the database same username and email

    $user_check_query = "SELECT * FROM registration WHERE email= '$email' LIMIT 1";
    $results = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($results); //outputs bool

    if ($user){
        if($user['email'] === $email){
            array_push($errors, "Email already exists with a registered account");
        }
    }

    
//register user if no error

    if(count($errors) == 0){
        $password = md5($password);
        
        $query = "INSERT INTO registration (first_name, middle_name, last_name,	address, street_1,	street_2,	city,	state_province,	country, zip_postal,	email, password) 
                  VALUES ('$first_name', '$middle_name', '$sur_name', '$address', '$street1', '$street2', '$city', '$state_province', '$country', '$zip_postal', '$email', '$password')";
        mysqli_query($db, $query);
        $_SESSION['email_success'] = $email;
        $_SESSION['success'] = "You are now logged in";
        unset($errors);
        $errors = array();

        

        header('location: Home.php');

    }

    //user log in

 if(isset($_POST['log_in'])){

    if(isset($_POST['email_log'])){
        $email_log = mysqli_real_escape_string($db, $_POST['email_log']);
    }
    if(isset($_POST['password_log'])){
        $password_log = mysqli_real_escape_string($db, $_POST['password_log']);
    }

    if(empty($email_log) || empty($password_log)){
        array_push($errors, "Incomplete fields");
    }
    else{
        unset($errors);
        $errors = array();
    }
   
    if(count($errors) == 0 ){
      
        $password_log = md5($password_log);
        $query = "SELECT * FROM registration WHERE email = '$email_log' AND password ='$password_log'";
        $results = mysqli_query($db, $query);
        $admin_id = 10;
        if(mysqli_num_rows($results)){
            $_SESSION['email_success'] = $email_log;
            $_SESSION['success'] = "Logged in successfully";
            

            //check if admin
            $query = "SELECT * FROM registration where reg_id = '$admin_id' AND email = '$email_log'";
            $admin = mysqli_query($db, $query);
            $getRowAssoc = mysqli_fetch_assoc($admin);
            if($getRowAssoc['reg_id'] == 10){
                $_SESSION['admin'] = "NLP Admin";
            }
            else{
                $_SESSION['admin'] = 'false';
            }
            
            
            header('location: Home.php');
        }
        else{
            array_push($errors, "Wrong username/password combination");
           
        }
  
    }
   

 }




 //Upload files 



if (isset($_POST['save_thesis'])) { 
  

    $filename = $_FILES['upload_thesis']['name'];

   
    $destination = 'file_handling/thesis/' . $filename;


    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    $file = $_FILES['upload_thesis']['tmp_name'];
    $size = $_FILES['upload_thesis']['size'];

    if (!in_array($extension, ['pdf', 'docx'])) {
        echo "You file extension must be .pdf or .docx";
    } elseif ($_FILES['upload_thesis']['size'] > 20000000000) { 
        echo "File too large!";
    } else {
        echo "Moving";

        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO publications (name, size, downloads) VALUES ('$filename', $size, 0)";
            if (mysqli_query($db, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}
//Upload tools

if (isset($_POST['save_filipino'])) { 


    $filename = $_FILES['upload_filipino']['name'];

 
    $destination = 'file_handling/uploaded_tools/filipino/' . $filename;

    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    $file = $_FILES['upload_filipino']['tmp_name'];
    $size = $_FILES['upload_filipino']['size'];

    if (!in_array($extension, ['zip', 'exe', 'rar'])) {
        echo "You file extension must be .zip, .exe, or .rar";
    } elseif ($_FILES['upload_filipino']['size'] > 20000000000) { 
        echo "File too large!";
    } else {
  
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO filipino_tools (name, size, downloads) VALUES ('$filename', $size, 0)";
            if (mysqli_query($db, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}



if (isset($_POST['save_cebuano'])) { 


    $filename = $_FILES['upload_cebuano']['name'];

    $destination = 'file_handling/uploaded_tools/cebuano/' . $filename;

    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    $file = $_FILES['upload_cebuano']['tmp_name'];
    $size = $_FILES['upload_cebuano']['size'];

    if (!in_array($extension, ['zip', 'exe', 'rar'])) {
        echo "You file extension must be .zip, .exe, or .rar";
    } elseif ($_FILES['upload_cebuano']['size'] > 20000000000) {
        echo "File too large!";
    } else {
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO cebuano_tools (name, size, downloads) VALUES ('$filename', $size, 0)";
            if (mysqli_query($db, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}


if (isset($_POST['save_hiligaynon'])) { 

    $filename = $_FILES['upload_hiligaynon']['name'];

    $destination = 'file_handling/uploaded_tools/hiligaynon/' . $filename;

    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    $file = $_FILES['upload_hiligaynon']['tmp_name'];
    $size = $_FILES['upload_hiligaynon']['size'];

    if (!in_array($extension, ['zip', 'exe', 'rar'])) {
        echo "You file extension must be .zip, .exe, or .rar";
    } elseif ($_FILES['upload_hiligaynon']['size'] > 20000000000) { 
        echo "File too large!";
    } else {
     
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO hiligaynon_tools (name, size, downloads) VALUES ('$filename', $size, 0)";
            if (mysqli_query($db, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}

if (isset($_POST['save_bicolano'])) { 


    $filename = $_FILES['upload_bicolano']['name'];


    $destination = 'file_handling/uploaded_tools/bicolano/' . $filename;


    $extension = pathinfo($filename, PATHINFO_EXTENSION);


    $file = $_FILES['upload_bicolano']['tmp_name'];
    $size = $_FILES['upload_bicolano']['size'];

    if (!in_array($extension, ['zip', 'exe', "rar"])) {
        echo "You file extension must be .zip, .exe, or .rar";
    } elseif ($_FILES['upload_bicolano']['size'] > 20000000000) {
        echo "File too large!";
    } else {
      
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO bicolano_tools (name, size, downloads) VALUES ('$filename', $size, 0)";
            if (mysqli_query($db, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}

if (isset($_POST['save_english'])) { 


    $filename = $_FILES['upload_english']['name'];


    $destination = 'file_handling/uploaded_tools/english/' . $filename;


    $extension = pathinfo($filename, PATHINFO_EXTENSION);


    $file = $_FILES['upload_english']['tmp_name'];
    $size = $_FILES['upload_english']['size'];

    if (!in_array($extension, ['zip', 'exe', "rar"])) {
        echo "You file extension must be .zip, .exe, or .rar";
    } elseif ($_FILES['upload_english']['size'] > 20000000000 ) {
        echo "File too large!";
    } else {
      
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO english_tools (name, size, downloads) VALUES ('$filename', $size, 0)";
            if (mysqli_query($db, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}

if (isset($_POST['save_others'])) { 


    $filename = $_FILES['upload_others']['name'];


    $destination = 'file_handling/uploaded_tools/others/' . $filename;


    $extension = pathinfo($filename, PATHINFO_EXTENSION);


    $file = $_FILES['upload_others']['tmp_name'];
    $size = $_FILES['upload_others']['size'];

    if (!in_array($extension, ['zip', 'exe', "rar"])) {
        echo "You file extension must be .zip, .exe, or .rar";
    } elseif ($_FILES['upload_others']['size'] > 20000000000) {
        echo "File too large!";
    } else {
      
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO others_tools (name, size, downloads) VALUES ('$filename', $size, 0)";
            if (mysqli_query($db, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}

if (isset($_POST['save_app'])) { 


    $filename = $_FILES['upload_app']['name'];


    $destination = 'file_handling/uploaded_tools/apps/' . $filename;


    $extension = pathinfo($filename, PATHINFO_EXTENSION);


    $file = $_FILES['upload_app']['tmp_name'];
    $size = $_FILES['upload_app']['size'];

    if (!in_array($extension, ['zip', 'exe', "rar"])) {
        echo "You file extension must be .zip, .exe, or .rar";
    } elseif ($_FILES['upload_app']['size'] > 20000000000) {
        echo "File too large!";
    } else {
      
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO app_table (name, size, downloads) VALUES ('$filename', $size, 0)";
            if (mysqli_query($db, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}






































?>