<?php
session_start();
include "conn.php";
    
    $message="";

if(isset($_POST['login'])){
    
//username and password sent from form
    
$username=$_POST['username'];
$password=$_POST['password'];
//    var_dump($username);
    
$sql="SELECT * FROM details where username='$username' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $resultCheck=mysqli_num_rows($result);

//    if results match username and password, table must be 1 row
    if($resultCheck ==1){
        header("Location:home.php");
    }
    else{
        echo("invalid username or password");
//        header("location:login.php");
         
    }
   

}