<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
$empty_err="";
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    }
if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    }
   
 if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    }
if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    }
if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    }
if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    }
if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    }
if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    }
 else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = :username";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password,name,phnum,email,state,street,city,pincode) VALUES (:username, :password, :name, :phnum, :email, :state, :street, :city, :pincode)";
         
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
$stmt->bindParam(":name", $param_name, PDO::PARAM_STR);
$stmt->bindParam(":phnum", $param_phnum, PDO::PARAM_INT);
$stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
$stmt->bindParam(":state", $param_state, PDO::PARAM_STR);
$stmt->bindParam(":street", $param_street, PDO::PARAM_STR);
$stmt->bindParam(":city", $param_city, PDO::PARAM_STR);
$stmt->bindParam(":pincode", $param_pincode,PDO::PARAM_INT);
  $stmt->bindParam(":dob", $param_dob,PDO::PARAM_STR);
          
            // Set parameters
            $param_username = $username;

            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
$param_name = trim($_POST["name"]);
$param_phnum = trim($_POST["phnum"]);
$param_email = trim($_POST["email"]);
$param_state = trim($_POST["state"]);
$param_city = trim($_POST["city"]);
$param_street = trim($_POST["street"]);
$param_pincode = trim($_POST["pincode"]);
$param_dob = trim($_POST["dob"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
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
    <title>Sign Up</title>
    <link rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="main.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body class="signup">
    <div class="wrapper1">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div> 
<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div> 
<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Phone number</label>
                <input type="text" name="phnum" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div> 
<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>E-mail</label>
                <input type="text" name="email" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div> 
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Street</label>
                <input type="text" name="state" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div> 
<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>City</label>
                <input type="text" name="city" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div> 
<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>State</label>
                <input type="text" name="street" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div> 
<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Pin Code</label>
                <input type="text" name="pincode" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>
