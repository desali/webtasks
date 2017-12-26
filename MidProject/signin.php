<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/signin.css">
</head>
<body>
  <?php include "connection/db.php" ?>
  <div class="wrapper"></div>
  <div class="main">
    <!-- Write your code here-->
    <div class="info">
      <form action="index.php">
          <div class="info-title"><p>Welcome to</p></div>
          <a href="index.php"><img src="img/logo.jpg" alt="Logo" width="65px"></a>
          <input type="text" name="username" placeholder="Username:">
          <input type="password" name="psw" placeholder="Password:">
          <input class="button bt-sub" value="Submit" type="submit">
      </form>
    </div>
</html>
</body>
