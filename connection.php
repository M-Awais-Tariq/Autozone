<?php
// Database connection settings
$host = 'localhost';
$dbName = 'web_project';
$username = 'root';
$password = '';

try {
    // Create a new PDO instance
    $conn = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo"Connected Successfully";

} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>