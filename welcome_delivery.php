<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to
 //page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: delivery.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="main.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>

        <a href="login.php" class="btn btn-danger">Sign Out of Your Account</a><br><br><br>
	<a href="delivery.php" class="btn btn-secondary">Weigh and estimate cost </a>
    </p>
</body>
</html>
