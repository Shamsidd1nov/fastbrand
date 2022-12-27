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
$result1 = $conn->query($sql);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row = $result1->fetch_assoc()) {
      if ($row["id"] == 2) {
        $product = $row["product_name"];   
      }
  }
} else {
  echo "0 results";
}
$conn->close();

// $con = new mysqli('localhost','obidjon','jM0tS6aE','obid');
$con = new mysqli('localhost','root','','fastbrand');
if (!$con) {
    echo "xato";
}

 
$name = $_POST['name'];
$addres = $_POST['addres'];
$number = $_POST['number'];
$tel = $_POST['tel'];

$sql = "SELECT id, name, addres FROM signin";
$result = $conn->query($sql);


$qry = "INSERT INTO `signin`(`product`, `name`, `addres`, `number`, `tel`) VALUES ('$product','$name','$addres','$number','$tel')";
$insert = mysqli_query($con,$qry);
if (!$insert) {
    echo "data xato";
} else {
    echo "succes";
    header('location:succes.html');
}

// bot

$arr = array("nomi=",$product,"ismi=",$name,"| manzili=",$addres," | telefon raqami=",$tel," | mahsulot soni=",$number);

$text = implode(" ",$arr);



$chat_id = '736521382';
$token = "5256308632:AAG8Go28SjAm_vYvU4WF4_zrEOM59KmLp1Y";

$url = "https://api.telegram.org/bot$token/sendMessage?text=$text&chat_id=$chat_id";

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

$result = curl_exec($ch);
curl_close($ch);
echo "<pre>";
print($result);


?>