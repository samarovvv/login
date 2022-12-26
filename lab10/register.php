<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><center>Registration</center></h2>
    <center><form action="" method="post">
        <label for="fname">First name:</label>
        <input type="text"  name="fname"><br><br>
            <label for="surname">Surname:</label>
            <input type="text"  name="surname"><br><br>
            <label for="uname">Username:</label>
            <input type="text"  name="uname"><br><br>
            <label for="pass">Password:</label>
            <input type="password"  name="pass"><br><br>
            <input type="submit" value="Register" >
            <h4><a href="login.php">Already a user-Log in</a></h4>
            </form></center>

</body>
</html>
<?php
$fname=$_POST['fname'];
$surname=$_POST['surname'];
$username=$_POST['uname'];
$password=$_POST['pass'];

$pass_enc = password_hash($password,PASSWORD_DEFAULT);

$connection=mysqli_connect('localhost','root','','users');

$query="INSERT INTO user(fname,lname,username,password)";
$query.="VALUES('$fname','$surname','$username','$password')";

$result=mysqli_query($connection,$query);
?>