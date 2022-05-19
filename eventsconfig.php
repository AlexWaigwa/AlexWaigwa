<?php
if(isset($_POST['upload'])){
    $target= "img/".basename($_FILES['img']['name']);
}
$description = $_POST['description'];
$img = $_POST['img'];
$msg="";

// Database connection
$conn = new mysqli('localhost','root','','demo');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into events(description, img) values(?, ?)");
    $stmt->bind_param("ss",$description, $img);
    $execval = $stmt->execute();
    echo $execval;
    echo "<p style = 'color:green', >Registration successful..</p>";
    
    $stmt->close();
    $conn->close();
}
if(move_uploaded_file($_FILES['img']['tmp_name'], $target)){
    $msg ="Uploaded successfully";
}
else{
    $msg="Not found";
}
?>