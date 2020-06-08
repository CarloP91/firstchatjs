<?php
$servername = "fojvtycq53b2f2kx.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$username = "gjmgooezgd0njxfq";
$password = "mlv0qte7fznldfj8";
$dbname = "ygg6o94kdgqgy36e";

$order= "nome"; 
$visual= "ASC"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM message_mitt";
$result = mysqli_query($conn, $sql);

$string = "[";
	while ($row = mysqli_fetch_array($result)) {
		$string = $string . '{"data": "'. $row["data"] .'","mittente": "'. $row["username"] .'", "testo": "' . $row["texto"] .'", "id": "' . $row["id"] .'"},';
	}
	mysqli_close($conn);
	$string = rtrim($string, ",");
	$string = $string . ']';
	echo $string;

	?>