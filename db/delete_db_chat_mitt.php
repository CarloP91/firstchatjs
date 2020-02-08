<?php
$servername = "fojvtycq53b2f2kx.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$username = "ltwgwrna6uukqi5g";
$password = "wklljo29mau1yzg1";
$dbname = "wgijrn50b1al9p6v";

$id = $row["id"];



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