<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Productdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, product_name FROM Producttb";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      if ($row["id"] == 1) {
        echo " Name: " . $row["product_name"];   
      }
  }
} else {
  echo "0 results";
}
$conn->close();
?>