<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){
    header("location: welcome_delivery.php");
    exit;
}

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["id"]))){
        $username_err = "Please enter your employee ID.";
    } else{
        $username = trim($_POST["id"]);
    }

    // Check if password is empty
    if(empty(trim($_POST["name"]))){
        $password_err = "Please enter your name.";
    } else{
        $password = trim($_POST["name"]);
    }

    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, name FROM deliverer WHERE id = :id";

        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":id", $param_id, PDO::PARAM_INT);

            // Set parameters
            $param_id = trim($_POST["id"]);
//$param_dob = trim($_POST["dob"]);
  $param_name=trim($_POST["name"]);
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Check if id  exists, if yes then verify password
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        //$dob = $row["dob"];
                        $name = $row["name"];
                        //if($dob->format('Y-m-d')==$param_dob->format('Y-m-d')){//dob is right
if($name==$param_name){
  session_start();
                          //  echo $param_dob
			//echo "hello from db".$dob;
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $name;

                            // Redirect user to welcome page
                            header("location: welcome_delivery.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The date of birth does not match.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that ID.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        unset($stmt);
    }

    // Close connection
    unset($pdo);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Deliverer Login</title>
    <link rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="main.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login Portal for deliverers</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>ID</label>
                <input type="text" name="id" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
        </form>
    </div>
</body>
</html>
