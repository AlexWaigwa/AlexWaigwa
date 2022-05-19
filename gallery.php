<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login2.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/theme.css">
    <style>

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#1F2739;
}

h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}

h2 {
  font-size:1em; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}
form{
  background-color: #0E1119;
  font-size: medium;
  align-items: center;
}
form{
  left: 120px;
  width: 100%;
  height: auto;
}
h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
	  font-weight: bold;
	  font-size: 1em;
  text-align: left;
  color: #185875;
}
footer{
    background-color: #0E1119;
    font-size: medium;
}
footer{
    bottom: 0;
    height: 20px;
    width: 100%;
    position:absolute;
}
.container td {
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
	  text-align: left;
	  overflow: hidden;
	  width: 80%;
	  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
	  padding-bottom: 2%;
	  padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #2C3446;
}

.container th {
	  background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}
    </style>
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
<h1 class="head">

</h1>
<div class="main">
        <form action="galleryconfig.php" method="post">
            <h2>Upload Photos</h2>
            <input type="file" id="img_name" name="image_name">
           <button type="submit" style="color:rgb(85, 14, 177); ">Submit</button>

        </form>
        </div>

<div id="row">
        <h1>Photos</h1>
<table class="container">
<thead>
<tr>
<th>ID</th>
<th>Image</th>
<th></th>
<th></th>
</tr>
<?php

$con = mysqli_connect('localhost','root','','demo');
$sql = "SELECT * FROM gallery";
$result = mysqli_query($con, $sql);
$resultCheck =mysqli_num_rows($result); 
if($resultCheck <= 0){
 print_r('no data in the database');


}
// while($rows = mysqli_fetch_array($result)){
// 	echo "<div id ='column'>";
// 	echo "<tr><td>" . "<img src='img/".$rows['img'] ."'>";
// 	echo"</div>";
// 	echo  "<td><t>" . "<p id =text_div>".$rows['description']."</p>" "</t></td>";
// }
while($rows = mysqli_fetch_array($result)){
    // echo "<tr><td>" ."<img src='img/". $rows["img"] . "</td><td>"
    // . $rows["description"]. "</td></tr>";
    echo "<tr>";
    echo "<td>" . $rows['id'] . "</td>";
    echo "<td>" . $rows['image_name'] . "</td>";
    echo "<td><a href='eventsupdate.php?did=".$rows['image_name']."'>Update</a></td>";
    echo "<td><a href='eventsdelete.php?did=".$rows['image_name']."'>Delete</a></td>";
echo "</tr>";
    }
    echo "</table>"; 
   
?> 
</thead> 
</table>  
</span>
</div> 
</div>
</body>
</html>