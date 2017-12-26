<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/element.css">
    <script src="js/element.js" defer></script>
</head>
<body>
  <?php include "connection/db.php" ?>
  <!-- HEADER -->
  <div class="header">
    <img src="img/logo.jpg" alt="Logo">
    <div class="navbar">
      <a href="index.php">Home</a>
      <a href="market.php">Market</a>
      <a href="sell.php">Sell</a>
      <a href="admin.php">Admin Page</a>
    </div>
    <div class="auth">
      <input type="button" onclick="location.href='signup.php';" class="signup" value="Sign up"/>
      <input type="button" onclick="location.href='signin.php';" class="signin" value="Sign in"/>
    </div>
  </div>
  <hr class="dashed">
  <div class="main">
    <div class="left">
      <div id="bigImage">
        <img id="bigImagee" src="img/first-thing.jpeg"/>
      </div>
        <div id="carousel">
            <img id = "first" onclick="myFunction(event)" src="img/fourth-thing.png"/>
            <img id = "second" onclick="myFunction(event)" src="img/second-thing.jpeg"/>
            <img id = "third" onclick="myFunction(event)" src="img/third-thing.jpeg"/>
            <img id = "fourth" onclick="myFunction(event)" src="img/fifth-thing.jpg"/>
            <img id = "fifth" onclick="myFunction(event)" src="img/sixth-thing.jpeg"/>
        </div>
    </div>
    <div class="right">
      <div class="title">
        <b>First item</b>
      </div>
      <div class="description">
          This is my first hand-made doll. Please buy it. Quiality is very high!
      </div>
      <div class="accept">
        <button class="bt-order">
          <p>Order<p>
        </button>
      </div>
    </div>
    <!-- Write your code here-->
  </div>
  <div class="footer">
    <p>
    Copyright@2017 Oct Kaskelen
  </p>
  </div>
</body>
</html>
