<?php session_start(); ?>

<?php

$username=$_SESSION['username'];
$lastname=$_SESSION['lname'];
$firstname=$_SESSION['fname'];


echo "Welcome back $firstname<br>
      Your full name is $firstname" . " " . "$lastname<br>
      Your username is $username.";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h4><a href="logout.php">Logout</a></h4>
</body>
</html>