<?php



if (isset($_POST['send'])){
    include "contact_conn.php";

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phn = trim($_POST['phn']);
    $message = trim($_POST['message']);

    
    if (empty($name) || empty($email) || empty($phn) || empty($message)) {
        echo "All fields are required.";
    }
    else{
     
        
        
        $sql = "INSERT INTO `contact` (`name`, `phn`, `email`,`message`) VALUES ('$name', '$phn', '$email','$message')";
        
        if (mysqli_query($conn, $sql)) {
            echo "successful!y sent";
            
            
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    
}}
?>