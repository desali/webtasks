<?php
  $connection = mysqli_connect("localhost", "root", "", "buysell");

  $username = $_GET['username'];
  $password = $_GET['pass'];
  $firstname = $_GET['lastname'];
  $lastname = $_GET['firstname'];
  $email = $_GET['email'];

  $sql = "INSERT INTO listofusers (username, password, firstname, lastname, email) VALUES ('$username','$password','$firstname','$lastname','$email')";
  if($connection -> query($sql) === TRUE) {
    header('Location:http://localhost/MidProject/signin.php');
  }
  else {
    echo "does not work";
  }
?>
