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
    <title>Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Style.css">
     <link rel="stylesheet" href="css/style2.css">
     <link rel="stylesheet" href="css/app.css">
     <link rel="stylesheet" href="css/theme.css">
    <style>
        body{ font: 14px sans-serif; text-align: center;background-color: #1F2739; }
        .center {
        margin-left: 400px;
        margin-right: auto;
        }
        .main {
        margin-left: 0px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="collapse navbar-collapse" id="navbarsDefault">
    <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>
    	<ul class="navbar-nav ml-auto align-items-center">
    		<li class="nav-item">
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
     <div class="main">
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout2.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
    </div>
</body>
</html>