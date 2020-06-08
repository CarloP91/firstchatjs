<?php
$servername = "fojvtycq53b2f2kx.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$username = "gjmgooezgd0njxfq";
$password = "mlv0qte7fznldfj8";
$dbname = "ygg6o94kdgqgy36e";

//$id = $_POST['id'];
$mittente = $_POST['mittente'];
$texto = $_POST['texto'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO message_mitt (username, texto)
		VALUES ('$mittente', '$texto')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
 // header( "refresh:0;url=../index.php" );
   	header("Location: ../index.php");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>