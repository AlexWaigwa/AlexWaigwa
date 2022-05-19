<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login1.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; 
        }
        body{ font: 14px sans-serif; text-align: center; }
        .center {
        margin-left: auto;
        margin-right: auto;
        }
        table {
        border-collapse: collapse;
        width: 70%;
        color: #588c7e;
        font-family: monospace;
        font-size: 15px;
        text-align: center;
        }
        th {
        background-color: #588c7e;
        color: white;
        padding: 10px;
        }
        tr:nth-child(even) {background-color: #f2f2f2}
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout2.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>

    
        <br>
        
        
    </div>
</body>
</html>