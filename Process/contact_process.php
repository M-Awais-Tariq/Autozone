<?php

include "../connection.php"  ;
try {
     

    // Signup functionality
    if (isset($_POST['messages'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // Insert new user into the database
            $query = "INSERT INTO messages (name, email, subject, message) VALUES ('$name', '$email' , '$subject', '$message')";
            echo $query ;
            $stmt = $conn->prepare($query);
            if ($stmt->execute()) {
                $message = "New User registered successfuly!"  ;

                echo "<script>alert('$message');</script>";

                header('Location: ../contact.php');
            } else {
                echo "Error: " . $stmt->errorInfo()[2];
            }
    }
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>