<?php
// error_reporting(0); Set this error reporting off when published to avoid releasing information
require 'db/connect.php';
require 'functions/security.php';


if(!empty($_POST)){
  if(isset($_POST['username'], $_POST['password'], $_POST['species'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $species = $_POST['species'];

    $encrypt = sha1($_POST['password']);

    $sql = "INSERT INTO actors (username, password, species) VALUES ('$username', '$encrypt', '$species')";
    if (mysqli_query($db, $sql)) {
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
  }
}
    mysqli_close($db);

?>

<!DOCTYPE html>
<html>
  <head>
    <title>  P & C Casting | Sign Up </title>
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
      <h1>Sign Up</h1>
      <h1 class="amount">Already have an account? <a href="login.php">Login!</a></h1>
    </div>
  </div>

<div class="container">
  <?php
      function validateInput(){
      $state = $_REQUEST["state"];
      $username = $_REQUEST["username"];

      if (strlen($state) != 2){
        print "State must be a 2-letter acronym.";
      }else if (!preg_match("/[A-Z]{2}/", $state)){
        print "State must be all caps.";
      }else{
        header("refresh:5;url=page_index.php");
        print "Welcome, '" . $username . "'. You have successfully created an account. You will return home in just a few moments.";
      }
    }

    if (!$_POST == ""){
      validateInput();
    }
  ?>

  <form method="POST" action="" style="margin-left:-10%;">
          Username: <br />
          <input type="text" name="username" id="username" autocomplete="off"><br/>
          Password: <br />
          <input type="text" name="password" id="password" autocomplete="off"><br />
          Name: <br />
          <input type="text" name="pet_name" id="pet_name" autocomplete="off"><br />
          Species: <br />
          <input type="text" name="species" id="species" autocomplete="off"><br />
          Email: <br />
          <input type="text" name="email"><br />
          City: <br />
          <input type="text" name="city" ><br />
          State: <br />
          <input type="text" name="state" size="2" maxlength="2"><br />
          <input style="margin-left:1%;" class="submit" type="submit" value="SIGN UP" />
  </form>
</div>

<?php
include("footer.html");
?>

</body>
</html>
