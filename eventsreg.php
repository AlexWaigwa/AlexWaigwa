<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$nok = $_POST['nok'];
$nokn =$_POST['nokn'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$county = $_POST['county'];
$eventid = $_POST['eventid'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$option=$_POST['option'];

// Database connection
$conn = new mysqli('localhost','root','','demo');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into events_register(fname, lname, nok, nokn, dob, age, gender, county, eventid, phone, email, option) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssss",$fname, $lname, $nok, $nokn, $dob, $age, $gender, $county, $eventid, $phone, $email, $option);
    $execval = $stmt->execute();
    echo $execval;
    echo "<p style = 'color:green', >Registration successful..</p>";
    
    $stmt->close();
    $conn->close();
}
?>