<?php
//connecting to database
//define credentials
$hostname = "hostname";
$username = "username";
$password = "password";
$database = "dbname"


mysqli_connect($hostname, $username, $password, $database);

if ($conn){
die("Database connection failed:");
}
else{
    echo "Connected to database successfully";
}
?>;