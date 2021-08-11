<?php 

session_start();

//Initializing variables

$username = "";
$email = "";
$password_1 = "";
$password_2 = "";
$errors = array();

//connect to db

$db = mysqli_connect('localhost', 'root', '', 'practice') or die("Could not connect to database");

//Register users


if(isset($_POST['username'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
}
if(isset($_POST['email'])){
    $email = mysqli_real_escape_string($db, $_POST['email']);
}
if(isset($_POST['password_1'])){
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
}
if(isset($_POST['password_2'])){
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
}

//form validation

if(empty($username)){
    array_push($errors, "Username is required");
}
if(empty($email)){
    array_push($errors, "Email is required");
}
if(empty($password_1)){
    array_push($errors, "Password is required");
}
if(empty($password_2)){
    array_push($errors, "Confirming password is required");
}
if($password_1 != $password_2){
    array_push($errors, "Password mismatch!");
}

//Already existing in the database same username and email

$user_check_query = "SELECT * FROM user WHERE username = '$username' or email= '$email' LIMIT 1";
$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($results); //outputs bool

if ($user){
    if($user['username'] === $username){
        array_push($errors, "Username already exists");
    }
    if($user['email'] === $email){
        array_push($errors, "Email already exists with a registered username");


    }
}

//register user if no error

 if(count($errors) == 0){
     $password = md5($password_1);
     $query = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
     mysqli_query($db, $query);
     $_SESSION['username'] = $username;
     $_SESSION['success'] = "You are now logged in";
     unset($errors);
     $errors = array();

     header('location: index.php');

 }

 //user log in

 if(isset($_POST['log_in'])){

    if(isset($_POST['username_log'])){
        $username_log = mysqli_real_escape_string($db, $_POST['username_log']);
    }
    if(isset($_POST['password_log'])){
        $password_log = mysqli_real_escape_string($db, $_POST['password_log']);
    }

    if(empty($username_log) || empty($password_log)){
        array_push($errors, "Incomplete fields");
    }
    else{
        unset($errors);
        $errors = array();
    }
   
    if(count($errors) == 0 ){
      
        $password_log = md5($password_log);
        $query = "SELECT * FROM user WHERE username = '$username_log' AND password ='$password_log'";
        $results = mysqli_query($db, $query);
        
        if(mysqli_num_rows($results)){
            $_SESSION['username'] = $username_log;
            $_SESSION['success'] = "Logged in successfully";
            
            header('location: index.php');
        }
        else{
            array_push($errors, "Wrong username/password combination");
           
        }
  
    }
   

 }

?>