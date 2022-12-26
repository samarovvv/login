<?php
session_start();

unset($_SESSION['username']);
unset($_SESSION['lname']);
unset($_SESSION['fname']);

session_destroy();
header("Location: login.php");

 ?>
