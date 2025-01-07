<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="admin_users";
$conn = mysqli_connect($servername, $username, $password);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo"";
}


$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error creating database: " . mysqli_error($conn) . "<br>";
}


mysqli_select_db($conn, $dbname);


$sql = "
CREATE TABLE IF NOT EXISTS users (
    sno INT(11) AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(50) NOT NULL
)";
if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}



?>
