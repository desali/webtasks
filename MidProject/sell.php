<!DOCTYPE html>
<html>
<head>
  <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
  <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
  <script src="js/script.js"></script>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/sell.css">
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

    <!-- Write your code here-->
    <div class="content">
      <div class="image">
        <input class="button" type="file" id="img_file" onChange="img_pathUrl(this);">
        <img src="" id="img_url" alt="">
      </div>
      <div class="description">
        <form>
          <p>Give title to your announcement:</p>
          <input class="title" type="text" name="title" placeholder="">
          <p>Describe your announcement:</p>
          <textarea name="comment" form=""></textarea><br>
          <input class="button bt-sub" type="submit" value="Submit">
        </form>
      </div>
    </div>

  </div>
  <div class="footer">
    <p>
    Copyright@2017 Oct Kaskelen
  </p>
  </div>
</body>
</html>
