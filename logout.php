<?php
session_start();
unset($_SESSION["success"]);
unset($_SESSION["email_success"]);
header("Location:Home.php");
?>