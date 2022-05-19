<?php

$names = $_POST['names'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$nationalid=$_POST['nationalid'];
$date =$_POST['date'];
$details=$_POST['details'];

// Database connection
$conn = new mysqli('localhost','root','','demo');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into bikebooking(names, email, phone, nationalid, date, details) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss",$names, $email, $phone, $nationalid, $date, $details);
    $execval = $stmt->execute();
    echo $execval;
    echo "<p style = 'color:green', >Registration successful..</p>";
    
    $stmt->close();
    $conn->close();
}
?>