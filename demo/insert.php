<?php
$n=$_POST["n"];
$servername = "localhost";
$username = "iop";
$password = "iop2020@";
$dbname = "iopstaff";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE sname SET n='$n' WHERE id=1";

if (mysqli_query($conn, $sql)) {
  echo "";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 