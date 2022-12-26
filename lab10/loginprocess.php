<?php include "db.php"; ?>
<?php session_start(); ?>

<?php

if(isset($_POST['login'])){
     $uname=$_POST['uname'];
     $pass=$_POST['pass'];

$uname=mysqli_real_escape_string($connection,$uname);
$pass=mysqli_real_escape_string($connection,$pass);

$query="SELECT * FROM  user WHERE username='{$uname}'";
$select_user_query=mysqli_query($connection,$query); 

if(!$select_user_query){

    die("Query failed" . mysqli_error($connection));
}
 while($row=mysqli_fetch_array($select_user_query)){

 $db_id=$row['id'];
 $db_fname=$row['fname'];
 $db_lname=$row['lname'];
 $db_username=$row['username'];
 $db_password=$row['password'];

 }
 if($uname !==$db_username OR $pass !== $db_password ){
    header("Location: login.php");
 }else if($uname ==$db_username && $pass == $db_password){
    $_SESSION['username']=$db_username;
    $_SESSION['fname']=$db_fname;
    $_SESSION['lname']=$db_lname;
    $_SESSION['password']=$db_password;
    $_SESSION['id']=$db_id;
    header("Location: loggedin.php");
 }else {
    header("Location login.php");
 
 }

}

?>