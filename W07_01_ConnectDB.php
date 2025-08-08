<?php

// $host = "localhost";
// $user = "root";
// $pass = "";
// $database = "mystorse_db";

//connect database with mysqli

// $conn = new mysqli($host, $user, $pass, $database);
// if ($conn->connect_error) {
//     die("Connect Failed : ".$conn->connect_error);
// } else {
//     echo "connect successful!";
// }


//connect database with PDO

$host = "localhost";
$user = "root";
$pass = "";
$database = "mystore_db";

$dsn = "mysql:host=$host;dbname=$database";

// try {
//     $conn = new PDO("mysql:host=$host;dbname=$database", $user, $pass);
//     //set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connection Successful!";
// } catch (PDOException $err) {
//     echo "Connection failed: ".$err->getMessage();
// }

try {
    $conn = new PDO($dsn, $user, $pass);
    //set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connection Successful!";
} catch (PDOException $err) {
    echo "Connection Failed: ".$err->getMessage();
}
?>