<script type="text/javascript">
	alert("Hello! I am an alert box!!");
</script>

<?php


$servername = "fojvtycq53b2f2kx.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$username = "gjmgooezgd0njxfq";
$password = "mlv0qte7fznldfj8";
$dbname = "ygg6o94kdgqgy36e";


$id = $_POST["id"];



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = 'DELETE FROM message_mitt WHERE id="$id"';


if (mysqli_query($conn, $sql)) {
    //  echo "Record deleted successfully";
    echo $sql;
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>