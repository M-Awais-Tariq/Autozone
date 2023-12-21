<?php

include "../connection.php"  ;
try {
     

    // Signup functionality
    if (isset($_POST['signup'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Insert new user into the database
            $query = "INSERT INTO admin (name, email, password) VALUES ('$name', '$email' , '$password')";
            $stmt = $conn->prepare($query);
            if ($stmt->execute()) {
                $message = "New admin registered successfuly!"  ;

                echo "<script>alert('$message');</script>";

                header('Location: login_admin.php');
            } else {
                echo "Error: " . $stmt->errorInfo()[2];
            }
    }
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>