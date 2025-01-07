<?php


if (isset($_POST["create"])) {
    include("config.php");
    $fullname =$_POST['fullname'];
    $email =  $_POST['email'];
    $password =  $_POST['password'];
    
    

    
    $sql = "INSERT INTO `users` (`fullname`, `email`, `password`) VALUES ('$fullname', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Signup successful! Welcome, $fullname";
        header("location:login.html");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}



?>