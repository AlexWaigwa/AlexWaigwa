<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
  $sql = "DELETE FROM events WHERE id= 1";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Record deleted successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?> 

<!-- if(isset($_GET['ID'])){
  $ID=$_GET['ID'];
  $sql = mysqli_query($conn, "DELETE FROM events WHERE ID= :'$ID'");
} -->