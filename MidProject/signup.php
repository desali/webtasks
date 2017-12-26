<!DOCTYPE html>
<html>
<div class="wrapper"></div>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
  <?php include "connection/db.php" ?>
  <div class="main">
    <!-- Write your code here-->
    <div class="info">
      <form action="register.php">
          <p class="info-title">Welcome to</p>
          <a href="index.php"><img src="img/logo.jpg" alt="Logo" width="65px"></a>
          <div class="inputs">
            <div class="fullname">
              <input class="first-name" type="text" name="firstname" placeholder="First name:">
              <input class="last-name" type="text" name="lastname" placeholder="Last name:">
            </div>
            <input type="text" name="email" placeholder="Email:">
            <input type="text" name="username" placeholder="Username:">
            <input type="password" name="pass" placeholder="Password:">
            <input type="submit" name="submit" value="Submit">
          </div>
      </form>
    </div>
</body>
</html>
