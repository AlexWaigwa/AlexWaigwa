<?php
if(isset($_POST['upload'])){
    $target= "upload/".basename($_FILES['image_name']['name']);
}
$img = $_POST['image_name'];
$msg="";

// Database connection
$conn = new mysqli('localhost','root','','demo');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into gallery(image_name) values(?)");
    $stmt->bind_param("s", $img);
    $execval = $stmt->execute();
    echo $execval;
    echo "<p style = 'color:green', >Registration successful..</p>";
    
    $stmt->close();
    $conn->close();
}
if(move_uploaded_file($_FILES['image_name']['tmp_name'], $target)){
    $msg ="Uploaded successfully";
}
else{
    $msg="Not found";
}
?>