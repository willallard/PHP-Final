<?php
$servername = "localhost";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=shapes", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

try {
    $results = $conn->query("SELECT shape, color FROM MyShapes");
    echo "Retrieved Results";
}   catch (Exception $e) {
    echo "no";
    exit;
}

var_dump($results);


?>