<?php
// Include the database connection file
include "../connection.php";

          $id = $_GET['id'] ;
// Prepare the SQL statement
$sql1 = "DELETE FROM admin WHERE id = '$id' ";
$stmt = $conn->prepare($sql1);

// Execute the SQL statement
$stmt->execute();

// Redirect the user to the index page
header('Location: admin_view.php');
?>