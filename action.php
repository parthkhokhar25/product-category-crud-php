<?php
include('connection.php');

$cat_id = $_POST['cat_id'];
$product      = $_POST['product'];
$description        = $_POST['description'];

$sql = "INSERT INTO `products` (`cat_id`, `product`, `description`) VALUES ('$cat_id', '$product', '$description');
";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "New record created successfully";
    header("Location: index.php");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();


?>