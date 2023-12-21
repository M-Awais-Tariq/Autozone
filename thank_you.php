<!DOCTYPE html>
<html>
<head>
    <title>Thank You</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <?php
    // Retrieve order details
    session_start();
    // $order = $_SESSION['order'];
    include "header.php";
    
    include "connection.php";


    ?>
<?php

//$id = $_POST['id'];
$name = $_POST['name'] ;
$email = $_POST['email'] ;
$address = $_POST['address'] ;
$total = $_POST['total'] ;
//echo "connected successfully" ;
try{
    $sql = "INSERT INTO customers (name,email,address,total)
    VALUES ('$name','$email','$address','$total')";
     if($conn->exec($sql)){
      $message = "New record inserted"; // The message you want to display in the alert

      echo "<script>alert('$message');</script>";
    //   header('location: home.php');
     }
     else{
      echo "Error: ".$sql. "<br>". $conn->$error;
     }
  }
  catch(PDOException $e) {
    echo "Error creating table: " . $e->getMessage();
  }

?>
   

    <!-- Thank You Message -->
    <div class="container mt-4">
        <h2>Thank You for Your Order!</h2>
        <p>Your order has been successfully placed. Here are the details:</p>
        <table class="table">
            
            <!--<tr>
                <th>Order ID:</th>
                <td><?php echo $id; ?></td>
            </tr> -->
            <tr>
                <th>Name:</th>
                <td><?php echo $name ?></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><?php echo $email ?></td>
            </tr>
            <tr>
                <th>Address:</th>
                <td><?php echo $address ?></td>
            </tr>
            <tr>
                <th>Total Bill:</th>
                <td><?php echo $total; ?></td>
            </tr>
            <!-- Add more order details if needed -->
        </table>
    </div>

    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
    <?php
include "footer.php";
?>
</body>
</html>
