<?php
session_start();
include "conn.php";

if(isset($_POST['register'])){

$uname=mysqli_real_escape_string($conn,$_POST['username']);
$mail=$_POST['email'];
$tel=$_POST['tel'];
$pass=$_POST['password'];
    var_dump($tel,$pass);

$sql="INSERT INTO details(username, email, tel, password) VALUES('".$uname."','".$mail."','".$tel."','".$pass."')";

if($conn->query($sql)===TRUE){
    header("Location:login.php");
}
else{
    echo "error:" .$sql. "<br>" .$conn->error;
    
}
    }
?>