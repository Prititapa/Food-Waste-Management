<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contacts";


$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "";


$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    die("Error creating database: " . mysqli_error($conn) . "<br>");
}


mysqli_select_db($conn, $dbname) or die("Error selecting database: " . mysqli_error($conn));


$sql = "
CREATE TABLE IF NOT EXISTS contact (
    sno INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    phn VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message VARCHAR(255) NOT NULL
   
)";

if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    die("Error creating table: " . mysqli_error($conn) . "<br>");
}



?>
