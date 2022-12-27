<?php
	require_once('php/createDb.php');
	require_once('./php/companent.php');

	$database = new Createdb("Productdb","Producttb");
?>
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
	
	$sql = "SELECT id, product_name, product_price FROM Producttb";
	$result1 = $conn->query($sql);
	
	if ($result1->num_rows > 0) {
	  // output data of each row
	  while($row = $result1->fetch_assoc()) {
		  if ($row["id"] == 8) {
			$prodname = $row["product_name"];
			$prodprice = $row["product_price"];   
		  }
	  }
	} else {
	  echo "0 results";
	}
	$conn->close();
?>

<?php
$img1 = "./product/hw56plus3.jpg";
$img2 = "./product/hw56plus1.jpg";
$img3 = "./product/hw56plus2.jpeg";
$img4 = "./product/hw56plus0.jpg";
	$proinfo = "
	<strong> Texnik xususiyatlari:</strong> <br>
	Ekran diagonali, dyuym: 1,77 <br>
	Ekran o'lchamlari: 320 x 480 <br>
	Simsiz interfeyslar: Bluetooth <br>
	Moslik: Android, iOS <br>
	Namlikka chidamli<br>
	Monitoring: kaloriyalar, yurak urish tezligi, uyqu, jismoniy faollik <br>
	Himoya darajasi: IP67 <br>
	Batareya muddati, kunlar: 5-6 kun <b></b>
	";
?>

<?php
	products($prodname,$prodprice,$proinfo,$img1,$img2,$img3,$img4);
?>