<?php
session_start();
  $username= $_SESSION['username'];
  ?>
<html>
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none; background-size: cover;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 500px;
  height: 100%;
  position: relative;
  margin: auto;

}

/* Next & previous buttons */
.prev {
  cursor: pointer;
  position: absolute;
  top: 75%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  left: 0;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {cursor: pointer;
  position: absolute;
  top: 75%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text1 {
  color: green;
  font-size: 16px;
  padding: 8px 12px;
  position: center;

  bottom: 8px;
  width: 60%;
  text-align:center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 150;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}


.button {
    background-color:green;
    border: none;
    color: white;
    padding: 15px 100px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
	float: center;
    cursor: pointer;
}






.container {
  position: relative;
  width: 30%;
  text-align: center;
  margin: auto;
  display: inline-block;
}

.image {
  display: block;
  width: 100%;
  height: auto;
  margin: auto;
  position: relative;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #708238;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
.footer {
    position: relative;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: grey;
    color: white;
    text-align: left;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
    background-color:black;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    color: white;
    text-align: center;
    padding: 14px 70px;
    text-decoration: none;
    font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color:white;
    color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
    background-color: dark grey;
    color: white;
}
.titlebar{
    background-color: #f97300;
    color: #003366;
	text-shadow: 2px 2px 5px white;
	border-bottom: 8px solid #eed986;
}




</style>


                                             <title>Garbage Bounty</title>
</head>
<body background="background.jpg">

	<div class="titlebar">
<center> <font size="7" align="center" face="Acme">GARBAGE BOUNTY</font>
</a></div>

<div class="topnav">
<a href="home.php" class="active">Home</a>
<a href="#products">Products</a>
<a href="about.html">About Us</a>
<a href="#contact">Contact Us</a>
<a href="index.php"> Sign Out </a>
</div>


<br/><br/>


<div class="mySlides fade" style="text-align:center">
  <div class="numbertext">1 / 3</div>
  <img src="paper waste.jpg" style="width:100%" align="center">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="clothes.jpg" style="width:100%" align="center">
</div>

<div class="mySlides fade">
 <div class="numbertext">3 / 3</div>
  <img src="cardboard.jpg" style="width:100%" align="center">


</div>



<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>

</div>
<br/><br/>
<div id="products">
<a href="datapb.php"><div class="container" style="text-align: center">
  <img src="paper bags.jpg" alt="Paper Bags" class="image"  >
  <div class="overlay">
    <div class="text">PAPER BAGS</div>
  </div>
</div>
</a>
  <a href="datacb.php">
<div class="container" >
  <img src="cloth bag.jpg" alt="Cloth Bags" class="image" >
  <div class="overlay">
    <div class="text">CLOTH BAGS</div>
  </div>
</div>
</a>
<a href="datapa.php"><div class="container">
  <img src="notebooks.jpg" alt="Notebook" class="image">
  <div class="overlay">
    <div class="text">NOTEBOOKS</div>
  </div>
</div></a>
<br>
<a href="datacp.php">
<div class="container">
  <img src="cloth purse.jpg" alt="Purse" class="image" >
  <div class="overlay">
    <div class="text">CLOTH PURSES</div>
  </div>
</div>
</a>

<a href="datapc.php">
<div class="container">
  <img src="cartons.jpg" alt="Carton" class="image" >
  <div class="overlay">
    <div class="text">CARTONS</div>
  </div>
</div>
</a>
<a href="datacm.php">
<div class="container">
  <img src="cloth shoes.jpg" alt="Shoes" class="image" >
  <div class="overlay">
    <div class="text">MATS</div>
  </div>
</div>
</a>
<br>
</div>



</center>
 <!-- Subscribe section -->
  <div class="w3-container w3-orange w3-padding-32">
      <form action="subscribe.php" method="POST">
    <h1>Subscribe</h1>
    <p>To get special offers and VIP treatment:</p>
    <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" style="width:100%"></p>
    <button type="button" class="w3-button w3-red w3-margin-bottom">Subscribe</button></form>
  </div>

  <!-- Footer -->
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
    <div class="w3-row-padding">
      <div class="w3-col s4" id="contact">
        <h4>Contact</h4>
        <p>Questions? Go ahead.</p>
        <form action="ask.php" >
          <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="Subject" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Message" name="Message" required></p>
          <button type="submit" class="w3-button w3-block w3-black">Send</button>
        </form>
      </div>


      <div class="w3-col s4 w3-justify">
        <h4>Store</h4>
        <p><i class="fa fa-fw fa-map-marker"></i> Garbage Bounty,<br/>Anna University(CEG),<br/>Sardar Patel Road, Guindy<br/>Chennai.</p>
        <p><i class="fa fa-fw fa-phone"></i>9884940730</p>
        <p><i class="fa fa-fw fa-envelope"></i>theinvisibleconman@gmail.com</p>

        <br>
        <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
        <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
        <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
        <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
        <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
      </div>
    </div>
  </footer>

 </font>

 <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

</script>
</body>
</html>
