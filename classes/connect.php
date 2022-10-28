<?php
//Include the connection
include 'dph.php';

//create database query
$sql = "CREATE DATABASE zuriphp";

if($conn){
    if(mysli_query($conn, $sql)){
        echo "Database created successfully";
    } else {
        echo "Error creating database; " . mysqli_error($conn);
    }

    mysqli_close($conn);
}


?>