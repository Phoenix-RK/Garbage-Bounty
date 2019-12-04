<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$item = $weight = "";
$item_err = $weight_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{    // Check if username is empty
    if(empty(trim($_POST["item"]))){
        $item_err = "Please choose an item.";
    } else{
        $item = trim($_POST["item"]);
    }    // Check if weight is empty
    if(empty(trim($_POST["weight"]))){
        $weight_err = "Please enter the weight.";
    } 
    else{
        $weight = trim($_POST["weight"]);
    }    // Validate credentials
    if(empty($weight_err) && empty($item_err)){
		            session_start();
                            $username="success";$id=1;
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
	}
}
//{
        // Prepare a select statement        //$sql = "SELECT id, username, password FROM users WHERE username = :username";
 //       if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
         //   $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            // Set parameters
           // $param_username = trim($_POST["username"]);           // Attempt to execute the prepared statement
//            if($stmt->execute())
//{                // Check if username exists, if yes then verify password
//                if($stmt->rowCount() == 1)
//{
     //               if($row = $stmt->fetch())
//{
                  //      $id = $row["id"];
                    //    $username = $row["username"];
                      //  $hashed_password = $row["password"];
//                        if(password_verify($password, $hashed_password))
//{
                            // Password is correct, so start a new session
                            /*session_start();
                            $username="success";$id=1;
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
*/
//}
 //else{  // Display an error message if password is not valid                 //$password_err = "The password you entered was not valid.";
   //                     }
//}
//} else{      // Display an error message if username doesn't exist
                   // $username_err = "No account found with that username.";
//                }
//}   else{
  //              echo "Oops! Something went wrong. Please try again later.";
    //        }
//}      // Close statement      //unset($stmt);
//}//1   // Close connection    //unset($pdo);


//}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="main.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Deliverer</h2>
        <p>Please fill in the details.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($item_err)) ? 'has-error' : ''; ?>">
                <label>Item</label>
                <input type="text" name="item" class="form-control" value="<?php echo $item; ?>">
                <span class="help-block"><?php echo $item_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($weight_err)) ? 'has-error' : ''; ?>">
                <label>Weight</label>
                <input type="text" name="weight" class="form-control">
                <span class="help-block"><?php echo $weight_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
       </form>
    </div>
</body>
</html>
