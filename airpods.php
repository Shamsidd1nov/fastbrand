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
		  if ($row["id"] == 2) {
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
$img1 = "./img/airpods2.jpeg";
$img2 = "./img/airpods2.jpeg";
$img3 = "./img/airpods2.jpeg";
$img4 = "./img/airpods2.jpeg";
	$proinfo = "
    Apple Airpods <br>

    Super ovoz!<br>
   
    Yangi muhrlangan!<br>
   
    Simsiz zaryadka oladi<br>
   
    40 daqiqada to'liq quvvat oladi<br>
   
    Super ovozi bor<br>
   
    Kachestvasi zo'r<br>
   
    Batarekalari original<br>
   
    Avtomatik ulanadi<br>
   
    8-9 soatgacha musiqa eshitish imkoniyati<br>
	";
?>

<?php
	products($prodname,$prodprice,$proinfo,$img1,$img2,$img3,$img4);
?>