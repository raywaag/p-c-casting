<?php
  require 'db/connect.php';
session_start(); // Starting Session
  $error = ''; // Variable To Store Error Message

  if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
    $error = "Username or Password is invalid";
  }
  else
  {

  $username = $_POST['username'];
  $password = $_POST['password'];

  $encrypt = sha1($_POST['password']);

  $sql = "SELECT * FROM actors WHERE username='".$username."' and password='".$encrypt."' LIMIT 1"; //LIMIT 1 makes sure we only draw one row from the database
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) == 1)          {
                $_SESSION['loggedin'] = $username; // initializes session
                header("location: profile.php"); // redirecting To success page
              }
      else {
             $error = "Username or Password is invalid";
           }
      mysqli_close($db); // closes connection
      }
    }
?>
