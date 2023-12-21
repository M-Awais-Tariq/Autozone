<?php
    session_start();

    include "../connection.php"; // Include your database connection file

// Retrieve the submitted values
$orderID = $_POST['order_id'];
$status = $_POST['status'];

// Perform the database update
$query = "UPDATE customers SET status = '$status' WHERE id = '$orderID'";
echo $query ;
$stmt = $conn->prepare($query);
 // You need to define $id, which represents the user ID you want to update
$stmt->execute();

if ($stmt->execute()) {
    // Update successful
    $message = "Status updated successfully.";
    echo "<script>alert('$message'); </script>";
    // If the form is not submitted, redirect to the appropriate page
    header("Location: customers_view.php");     
} 

else {
    // Update failed
    echo "Error updating status: " . mysqli_error($connection);
    // If the form is not submitted, redirect to the appropriate page
    header("Location: customers_view.php");        
    exit();
    
}

?>
