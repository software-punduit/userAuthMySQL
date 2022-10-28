
<?php
//connecting to database
//define credentials
$host = "localhost";
$user = "root";
$password = "";

mysqli_connect($host, $user, $password);

if ($conn){
die("Database connection failed:");
}
else{
    echo "Connected to database successfully";
}
?>;
