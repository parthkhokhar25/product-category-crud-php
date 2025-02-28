<?php
include('connection.php');

$category      = $_POST['category'];

$sql = "INSERT INTO `category` (`category`) VALUES ('$category');
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