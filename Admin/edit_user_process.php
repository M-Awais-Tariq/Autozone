<?php
// edit_user_process.php
include "../connection.php"; 
// Check if the form is submitted
if (isset($_POST["edit_admin"])) {
    // Get the form data
    $id = $_GET['id'];

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    echo $password ;

    // Validate and sanitize the data (you can add your validation logic here)

    // Database connection
     // Include your database connection file

    try {
        // Prepare and execute the update query
        $query = "UPDATE users SET name = '$name', email = '$email', password = '$password' WHERE id = '$id' ";
        echo $query ;
        $stmt = $conn->prepare($query);
         // You need to define $id, which represents the user ID you want to update
        $stmt->execute();

        // Redirect to the updated user's profile page or any other appropriate location
         header("Location: users_view.php");
        exit();
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
} else {
    // If the form is not submitted, redirect to the appropriate page
     header("Location: users_view.php");
    exit();
}
?>
