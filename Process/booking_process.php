<?php

include "../connection.php"  ;
try {
     

    // Signup functionality
    if (isset($_POST['book'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $service = $_POST['service'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $message = $_POST['message'];

        // Insert new user into the database
            $query = "INSERT INTO services (name, email, service ,date , time , message) VALUES ('$name', '$email' , '$service',  '$date' , '$time' , '$message')";
            echo $query ;
            $stmt = $conn->prepare($query);
            if ($stmt->execute()) {
                $message = "Booknig successfull!"  ;

                echo "<script>alert('$message');</script>";

                header('Location: ../service.php');
            } else {
                echo "Error: " . $stmt->errorInfo()[2];
            }
    }
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>