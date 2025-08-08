<?php
include 'W07_01_ConnectDB.php';

$sql = "SELECT * FROM products";

$result = $conn->query($sql);

if ($result->rowCount() > 0) {
    // echo "<h2>Successful: found data in product table.</h2>";

    // $data = $result->fetchAll(PDO::FETCH_NUM);
    // $data = $result->fetchAll(PDO::FETCH_ASSOC);
    // $data = $result->fetchAll(PDO::FETCH_BOTH);

    // print_r($data);

    // --------------------------------------------

    // use prepared statement for protect SQL injection
    // use execute() for run command SQL
    // use fetchAll() for get fetch all data in once
    // use print_r() for show all data in array format

    // $stmt = $conn->prepare($sql);
    // $stmt->execute();
    // $data = $stmt->fetchAll(PDO::FETCH_NUM);

    // echo "<br>";
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";
    // echo "<hr>";
    // --------------------------------------------
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";
    
    // --------------------------------------------

    header('Content-Type: application/json'); // ระบุ Content-Type เป็น JSON
    echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); // แปลงข้อมูลใน $arr เป็น JSON และแสดงผล

} else {
    echo "<h2>Error: don't found data in product table.</h2>";
}
