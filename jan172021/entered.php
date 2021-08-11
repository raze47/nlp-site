<?php include('serverNLP.php') ?>
<?php 



session_start();
if(isset($_SESSION['first_name'])){
    $_SESSION['msg'] = "You must log in to view this page";
 //   header("location: index.php");

}
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['first_name']);
    header('location: home.php');
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
</head>

<body>
    <h1>This is the homepage</h1>
    <?php if(isset($_SESSION['success'])) :?>
    <div>
        <h3>
            <?php 
                echo $_SESSION['success'];
                unset($_SESSION['success']);
            
            ?>
        </h3>

    </div>
    <?php endif ?>
<!--If the user logs, present info-->
<?php if(isset($_SESSION['first_name'])) : ?>
    <h3>Welcome <strong><?php echo $_SESSION['first_name']; ?><strong></h3>
    <button><a href="Signup.php?logout='1'">Log out</a></button>
<?php endif ?>

</body>


</html>