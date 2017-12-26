<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/market.css">
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
    <?php $connection = mysqli_connect("localhost", "root", "", "buysell"); ?>
    <div class="addItem">
        <a href="sell.php" class="add">Sell</a>
    </div>
    <div class="cards">
      <?php
      $query = mysqli_query($connection,"SELECT * FROM market");
      while($items = mysqli_fetch_assoc($query)){ ?>
        <div class="card-outer"><div class="card"><div class="title"><?php echo $items['name'];?>
        </div><div class="content"><a href="element.php"><img class="card-img" src=<?php echo $items["srcImage"]?>></img></a><div class="description">
        <?php echo $items["description"] ?></div></div></div></div>
      <?php } ?>
    </div>
  </div>
  <div class="footer">
    <p>
    Copyright@2017 Oct Kaskelen
  </p>
  </div>
</body>
</html>
