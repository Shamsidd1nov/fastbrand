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
		  if ($row["id"] == 1) {
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
$img1 = "./img/chehol.png";
$img2 = "./img/chehol.png";
$img3 = "./img/chehol.png";
$img4 = "./img/chehol.png";
	$proinfo = "
    Silikon g'ilof
	";
?>

<?php
		products($prodname,$prodprice,$proinfo,$img1,$img2,$img3,$img4);
?>