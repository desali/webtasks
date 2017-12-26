<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Buy | Sell</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="js/home.js" defer></script>
</head>

<body>
  <!-- HEADER -->
  <div class="header">
    <img src="img/logo.jpg" alt="Logo">
    <div class="navbar">
      <a href="index.php">Home</a>
      <a href="market.php">Market</a>
      <a href="sell.php">Sell</a>
      <a href="admin.php">Admin Page</a>
    </div>
<?php
  $connection = mysqli_connect("localhost", "root", "", "buysell");
  if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $sql = "SELECT * FROM `users` WHERE `login` = '".$username."AND `password`='".$pass."";
    $result = mysqli_query($sql); }?>

    <div class = "auth">
      <input type="button" onclick="location.href='signup.php';" class="signup" value="Sign up"/>
      <input type="button" onclick="location.href='signin.php';" class="signin" value="Sign in"/>
    </div>
  </div>
  <hr class="dashed">
  <div class="main">
    <!-- Write your code here-->
    <div class="decor">
      <img src="img/decor-left.png"></img>
    </div>
    <div class="slider">
      <div class="slideshow-container">
        <div class="mySlides fade default">
          <img src="img/carousel-second.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
          <img src="img/carousel-third.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="img/carousel-first.jpg" style="width:100%">
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>
      <div class="dots">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
    </div>
    <div class="decor">
      <img src="img/decor-right.png"></img>
    </div>
  </div>

  <div class="footer">
    <p>
    Copyright@2017 Oct Kaskelen
  </p>
  </div>
</body>
</html>
