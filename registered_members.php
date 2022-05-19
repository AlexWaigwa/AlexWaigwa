<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/theme.css">
    <title>Events</title>
    <style>
         body{ font: 14px sans-serif; text-align: center; }
        .center {
        margin-left: auto;
        margin-right: auto;
        }
    </style>
<?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login1.php");
    exit;
}
?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="collapse navbar-collapse" id="navbarsDefault">
    <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>
    <ul class="navbar-nav ml-auto align-items-center">
    		<li class="nav-item">
    		<a class="nav-link active" href="index.php">Dashboard</a>
			</li>
                <li>
                <a class="nav-link active" href="events_man.php">Posters</a>
                </li>
                <li>
                <a class="nav-link active" href="gallery.php">Photos</a>
                </li>
                <li>
                <a class="nav-link active" href="bookings.php">Bikes</a>
                </li>
                <li>
                  <a class="nav-link active" href="registered_members.php">Events Registration</a>
                </li>
                <li>
                  <a class="nav-link active" href="upload_poster.php">upload Events</a>
                </li>
    	</ul>
    </div>
    </nav>  
        <h1>Events Members Records</h1>
<table class="container">
<thead>
<tr>
<!-- <th>ID</th> -->
<th>first name</th>
<th>Last name</th>
<!-- <th>NoK</th> -->
<!-- <th>NoK number</th> -->
<th>DoB</th>
<th>Age</th>
<th>Gender</th>
<th>County</th>
<th>Event ID</th>
<th>Phone</th>
<!-- <th>Email</th> -->
<th>Option</th>
<th></th>
<th></th>
</tr>
<?php

$con = mysqli_connect('localhost','root','','demo');
$sql = "SELECT * FROM events_register";
$result = mysqli_query($con, $sql);
$resultCheck =mysqli_num_rows($result); 
if($resultCheck <= 0){
 print_r('no data in the database');


}
while($rows = mysqli_fetch_array($result)){
    echo "<tr>";
    // echo "<td>" . $rows['id'] . "</td>";
    echo "<td>" . $rows['fname'] . "</td>";
    echo "<td>" . $rows['lname'] . "</td>";
    // echo "<td>" . $rows['nok'] . "</td>";
    // echo "<td>" . $rows['nokn'] . "</td>";
    echo "<td>" . $rows['dob'] . "</td>";
    echo "<td>" . $rows['age'] . "</td>";
    echo "<td>" . $rows['gender'] . "</td>";
    echo "<td>" . $rows['county'] . "</td>";
    echo "<td>" . $rows['eventid'] . "</td>";
    echo "<td>" . $rows['phone'] . "</td>";
    // echo "<td>" . $rows['email'] . "</td>";
    echo "<td>" . $rows['option'] . "</td>";
    echo "<td><a href='eventsupdate.php?did=".$rows['id']."'>Update</a></td>";
    echo "<td><a href='eventsdelete.php?did=".$rows['id']."'>Delete</a></td>";
echo "</tr>";
    }
    echo "</table>"; 
   
?>  
</thead>
</table>
</body>
</html>

