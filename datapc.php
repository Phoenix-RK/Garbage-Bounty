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

    $sql = "SELECT p_id,p_name,qty,price FROM paper_carton where p_id = 330001";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      $row = mysqli_fetch_assoc($result);
    ?>

    <div id = "div1">
        <img src ="papercarton1.jpg" id = "img1"><br>
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

      $sql = "SELECT p_id,p_name,qty,price FROM paper_carton where p_id = 330002";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($result);
      ?>

      <div id = "div1">
          <img src ="papercarton2.jpg" id = "img2"><br>
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

      $sql = "SELECT p_id,p_name,qty,price FROM paper_carton where p_id = 330003";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($result);
      ?>

      <div id = "div1">
          <img src ="papercarton3.jpg" id = "img2"><br>
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
