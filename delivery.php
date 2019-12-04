<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
;
}

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$item = $weight =$custName=$delName="";
$item_err = $weight_err =$custName_err= $delName_err="";
$itemcost="";
  $cost=0;$id=1;
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
    }
  if(empty(trim($_POST["custName"]))){
        $custName_err = "Please enter the customer name.";
    } else{
        $custName = trim($_POST["custName"]);
    }
  if(empty(trim($_POST["delName"]))){
        $delName_err = "Please choose a deliverer name.";
    } else{
        $delName = trim($_POST["delName"]);
    }


   // Validate credentials
    if(empty($weight_err) && empty($item_err)){
		            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = "";
                            // Redirect user to welcome page
			    $itemcost=$_POST["item"];
			    $weight=$_POST["weight"];
			    $cost=$itemcost*$weight;
			    //echo $cost;
	                    //$username=$cost;
			    //$_POST["cost"]=$cost;
                            //header("location: welcome.php");
	}
}

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


<div class="form-group <?php echo (!empty($custName_err)) ? 'has-error' : ''; ?>">
                <label>Customer Name</label>
                <input type="text" name="custName" class="form-control" value="<?php echo $custName; ?>">
                <span class="help-block"><?php echo $custName_err; ?></span>
            </div>

<div class="form-group <?php echo (!empty($delName_err)) ? 'has-error' : ''; ?>">
                <label>Deliverer Name</label>
                <input type="text" name="delName" class="form-control" value="<?php echo $delName; ?>">
                <span class="help-block"><?php echo $delName_err; ?></span>
            </div>

<div class="form-group <?php echo (!empty($item_err)) ? 'has-error' : ''; ?>">
                <label>Item</label>

 <select name="item">
  <option value="15">Old Newspaper-Rs 15 per kilo</option>
  <option value="10">Books-Rs 10 per kilo</option>
  <option value="20">Cartons-Rs 20 per kilo</option>
  <option value="16">Cotton Cloth-Rs 16 per kilo</option>
<option value="12">Jute-Rs 12 per kilo</option>

</select>
 </div>

            <div class="form-group <?php echo (!empty($weight_err)) ? 'has-error' : ''; ?>">
                <label>Weight</label>
                <input type="text" name="weight" value="<?php echo $weight ; ?>"class="form-control">
                <span class="help-block"><?php echo $weight_err; ?></span>
            </div>
<div class="form-group">
                <label>Total cost</label>
                <input type="text" name="cost" class="form-control" value="<?php echo $cost ; ?>"   readonly>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Find Cost">
                <a href="thanks.php"> Exit </a>
            </div>
       </form>
    </div>
</body>
</html>
