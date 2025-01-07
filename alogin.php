<?php


if (isset($_POST["login"])) {
    include("config.php");
    
    $email =  $_POST['email'];
    $password =  $_POST['password'];
    
    if ($email=='technausad@gmail.com' && $password=='admin'){
      header('location:admin.html');
    }
    else{
      echo "invalid credentials" . mysqli_error($conn);
    
     
    }
    
}
?>