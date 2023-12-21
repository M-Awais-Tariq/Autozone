<?php

include "../connection.php";
session_start();

$_SESSION['login'] = 'you are logged in';
try {

    // Login functionality
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Check if the username and password match
        $query = "SELECT * FROM users WHERE email= :email AND password= :password";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        
        // Check if any rows are returned
        if ($stmt->rowCount() > 0) {
            $_SESSION['login'] = 'you are logged in' ;
            $row = $stmt->fetch();
            $username = $row['name'];
            $_SESSION['name'] = $username;
            header('Location: ../index.php');
            exit();
        } else {
            $message = "Invalid email or password!";
            echo "<script>alert('$message');</script>";
            header('Location: ../login.php');
            exit();
        }
    }
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
