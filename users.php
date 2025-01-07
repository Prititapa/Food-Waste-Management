<?php
if (isset($_POST["submit"])) {
    include("config.php");

    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']); // 

    
    if ($password !== $confirm_password) {
        die("Passwords do not match.");
    }

    
    

    
    $sql = "INSERT INTO users (fullname, email, password) VALUES ('$fullname', '$email', '$password')";

    
    if (mysqli_query($conn, $sql)) {
        echo "Data inserted";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    
    mysqli_close($conn);
}
?>
