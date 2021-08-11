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
        
        if(mysqli_num_rows($results)){
            $_SESSION['email_success'] = $email_log;
            $_SESSION['success'] = "Logged in successfully";
            
            header('location: Home.php');
        }
        else{
            array_push($errors, "Wrong username/password combination");
           
        }
  
    }
   

 }








?>