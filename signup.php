<?php
include "config.php";
if (isset($_POST['create'])){
    

    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    
    if (empty($fullname) || empty($email) || empty($password) ) {
        echo "All fields are required.";
    } 
    elseif($password !== $confirm_password){
        echo"passwords do not match";
    }
    
    else {
        
        $sql = "INSERT INTO `users` (`fullname`, `email`, `password`) VALUES ('$fullname', '$email', '$password')";
        
        if (mysqli_query($conn, $sql)) {
            echo "Sign up successful!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>
