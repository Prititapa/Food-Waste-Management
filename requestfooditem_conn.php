<?php
$servername="localhost";
$username="root";
$password="";
$db_name="orderlist";
$conn=mysqli_connect($servername,$username,$password);


if(!$conn)
{
    die("error".mysqli_error($conn));
}
else{
    echo "";
}

$sql = "CREATE DATABASE IF NOT EXISTS $db_name";
if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error creating database: " . mysqli_error($conn) . "<br>";
}


mysqli_select_db($conn, $db_name);


$sql =" 
CREATE TABLE IF NOT EXISTS `order_list` (
    sno INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    contact VARCHAR(50) NOT NULL,
    address VARCHAR(100) NOT NULL,
    name_of_fooditem VARCHAR(100) NOT NULL,
    no_of_orderfood INT(11) NOT NULL)";
if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}



?>
