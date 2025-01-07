<?php


if (isset($_POST["login"])) {
    include("config.php");
    
    $email =  $_POST['email'];
    $password =  $_POST['password'];
    
    

    
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

    
    $result=mysqli_query($conn,$sql);
    $row=mysqli_num_rows($result);
    $count=mysqli_num_rows($result);
 if($count==1){
    header("Location:donor.html");
 }
 else{
    echo"invalid credentials" . mysqli_error($conn);
    };
    
 }

?>