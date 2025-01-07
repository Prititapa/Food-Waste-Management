<?php
include "crud_conn.php";
if(isset($_GET['deleteid'])){
    $user_id=$_GET['deleteid'];
    $sql="DELETE FROM `users` WHERE `sno`='$user_id'";
    $result=$conn->query($sql);

    if($result==True){
    header("location:view.php");
    }else{

    echo "error".$conn->error;
    }

}
?>