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
		  if ($row["id"] == 11) {
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
$img1 = "./img/product/Cowin_SE7.jpg";
$img2 = "./img/product/Cowin_SE7.jpg";
$img3 = "./img/product/Cowin_SE7.jpg";
$img4 = "./img/product/Cowin_SE7.jpg";
	$proinfo = "Professional faol shovqinni bekor qilish (ANC) texnologiyasi. <br>
    AptX Hi-Fi texnologiyasi bilan ajoyib ovoz<br>
    Yuqori sifatli o'rnatilgan mikrofon va Bluetooth 5.0.<br>
    Professional Protein Earpad va yig'iladigan dizayn.<br>
    Ajoyib o'yin vaqti. 30 soatlik o'yin vaqti. O`rnatilgan 800 mA/soat sig`imli batareya naushniklarni o`chirishga ruxsat bermaydi.<br>
	";
?>

<?php
	products($prodname,$prodprice,$proinfo,$img1,$img2,$img3,$img4);
?>