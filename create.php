<?php
if(isset($_POST['submit'])){
    include "crud_conn.php";
    $fullname=$_POST['fullname'];
   
    $email=$_POST['email'];
    $password=$_POST['password'];
   
$sql="INSERT INTO `users`(`fullname`,`email`,`password`) VALUES ('$fullname','$email','$password')";
if(mysqli_query($conn,$sql)){
    header("location:view.php");
}else{
    "error".mysqli_error($conn);
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user_form</title>
</head>
<body>
        <form action="" method="post">
        <label for="fname">FULLNAME</label>
        <input type="text" id="fullname" name="fullname" placeholder="give your full name">
        <br><br>
        
        <label for="email">EMAIL</label>
        <input type="email" id="email" name="email" placeholder="give your email">
        <br><br>
        <label for="password">PASSWORD</label>
        <input type="password" id="password" name="password" placeholder="set your password">
        <br><br>
        
        <input type="submit" name="submit" value="submit">  
</body>
</html>


