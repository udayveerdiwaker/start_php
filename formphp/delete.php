<?php
include 'connection.php';

$_GET['id'];
    $id=$_GET['id'];

    $sql = "DELETE FROM textuplode WHERE id ='$id'";

    $result= mysqli_query($conn,$sql);
    
        header("location:table.php");

?>