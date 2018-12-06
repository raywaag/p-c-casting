<!DOCTYPE html>
<html>
  <head>
    <title>  P & C Casting | Login </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>


  </head>

  <body>

    <!-- Nav Bar -->
    <?php include("navbar_collapse.html"); ?>

  <div class="section bg">
    <div class="container center" style="margin-left:5%">
      <h1>Log in</h1>
      <h1 class="amount">Don't have an account? <a href="sign_up.php">Sign up!</a></h1>
    </div>
  </div>

<div class="container">
    <?php
      include('loginAct.php'); // Includes Login Script
      if(isset($_SESSION['loggedin'])){
      header("location: profile.php"); // Redirecting To Profile Page
      }
    ?>
    <span style="color:red;"><?php echo $error; ?></span>
  <form method="post" action="" style="margin-left:-10%;">
          Username: <br />
          <input type="text" name="username"><br />
          Password: <br />
          <input type="text" name="password"><br />
          <input class="submit" type="submit" name="submit" value="LOGIN" />
  </form>
</div>

<?php
include("footer.html");
?>

</html>
