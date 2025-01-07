<?php

include "listfooditem_conn.php";


if (isset($_POST['submit'])) {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $name_of_fooditem = $_POST['name_of_fooditem'];
    $no_of_orderfood = $_POST['no_of_orderfood'];

    
    $sql = "INSERT INTO `food_list`(`name`, `email`, `contact`, `address`, `name_of_fooditem`, `no_of_orderfood`)
            VALUES ('$name', '$email', '$contact', '$address', '$name_of_fooditem', '$no_of_orderfood')";
    if (mysqli_query($conn, $sql)) {
        echo "Data submitted successfully!";
        header("location:listfoodview.php");
    } else {
        die("Error: " . mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
    <link rel="stylesheet" href="listfooditem.css">
</head>
<body>
<div class="outer-box">
    <div class="inner-box">
    <main class="signup-body">
    <form action="" method="post">
        <p>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </p>
        <p>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </p>
        <p>
        <label for="contact">Contact</label>
        <input type="text" id="contact" name="contact" placeholder="Enter your contact number" required>
        </p>
        <p>
        <label for="address">Address</label>
        <input type="text" id="address" name="address" placeholder="Enter your address" required>
        </p>
        <p>
        <label for="name_of_fooditem">Name of Food Item</label>
        <input type="text" id="name_of_fooditem" name="name_of_fooditem" placeholder="Enter the name of the food item" required>
        </p>
        <p>
        <label for="no_of_orderfood">Number of Order Food</label>
        <input type="number" id="no_of_orderfood" name="no_of_orderfood" placeholder="Enter the number of ordered food" required>
        </p>
        <p>
        <input type="submit" name="submit" value="Submit"> 
        </p> 
    </form>
</main>
</div>
</div>
</body>
</html>
