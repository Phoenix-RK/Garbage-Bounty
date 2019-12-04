<!DOCTYPE html>
<html>
<head>
  <style>
    .body{
      backround-color: black;
    }
    #div1{
      color:red;
    }
    #img1
    {

    }
  </style>
</head>

<body class = "body">
    <p>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "store";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT p_id,p_name,qty,price FROM cloth_bag where p_id = 550001";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      $row = mysqli_fetch_assoc($result);
    ?>

    <div id = "div1">
        <img src ="clothbag1.jpg" id = "img1"><br>
      <?php
      echo "Product ID: ".$row['p_id']."<br>"."Product Name: ".$row['p_name']."<br>"."Quantity: ".$row['qty']."<br>"."Price: ".$row['price']."<br><br>";
      }
      else {
            echo "0 results";
          }
      mysqli_close($conn);
      ?>
    </div>
  </p>

    <p>
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "store";

      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      $sql = "SELECT p_id,p_name,qty,price FROM cloth_bag where p_id = 550002";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($result);
      ?>

      <div id = "div1">
          <img src ="clothbag2.jpg" id = "img2"><br>
        <?php
        echo "Product ID: ".$row['p_id']."<br>"."Product Name: ".$row['p_name']."<br>"."Quantity: ".$row['qty']."<br>"."Price: ".$row['price']."<br><br>";
        }
        else {
              echo "0 results";
            }
        mysqli_close($conn);
        ?>
      </div>
    </p

    <p>
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "store";

      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      $sql = "SELECT p_id,p_name,qty,price FROM cloth_bag where p_id = 550003";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($result);
      ?>

      <div id = "div1">
          <img src ="clothbag3.jpg" id = "img2"><br>
        <?php
        echo "Product ID: ".$row['p_id']."<br>"."Product Name: ".$row['p_name']."<br>"."Quantity: ".$row['qty']."<br>"."Price: ".$row['price']."<br><br>";
        }
        else {
              echo "0 results";
            }
        mysqli_close($conn);
        ?>
      </div>
    </p>

    <p>
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "store";

      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      $sql = "SELECT p_id,p_name,qty,price FROM cloth_bag where p_id = 550004";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($result);
      ?>

      <div id = "div1">
          <img src ="clothbag4.jpg" id = "img2"><br>
        <?php
        echo "Product ID: ".$row['p_id']."<br>"."Product Name: ".$row['p_name']."<br>"."Quantity: ".$row['qty']."<br>"."Price: ".$row['price']."<br><br>";
        }
        else {
              echo "0 results";
            }
        mysqli_close($conn);
        ?>
      </div>
    </p>

    <p>
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "store";

      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      $sql = "SELECT p_id,p_name,qty,price FROM cloth_bag where p_id =550005";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($result);
      ?>

      <div id = "div1">
          <img src ="clothbag5.jpg" id = "img2"><br>
        <?php
        echo "Product ID: ".$row['p_id']."<br>"."Product Name: ".$row['p_name']."<br>"."Quantity: ".$row['qty']."<br>"."Price: ".$row['price']."<br><br>";
        }
        else {
              echo "0 results";
            }
        mysqli_close($conn);
        ?>
      </div>
    </p>


</body>
</html>
