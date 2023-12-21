<?php

include "../connection.php";
session_start();

try {
    // Login functionality
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Check if the username and password match
        $query = "SELECT * FROM admin WHERE email= '$email' AND password= '$password ' ";
        $stmt = $conn->prepare($query);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $_SESSION['admin'] = 'you are logged in' ;
            $row = $stmt->fetch();
            $username = $row['name'];
            $_SESSION['name'] = $username; // Store username in session

            header('Location: dashboard.php');
            exit();
        } else {
            echo "Invalid username or password!";
        }
    }
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
