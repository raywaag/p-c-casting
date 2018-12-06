<?php
require 'db/connect.php';

include('session.php');

if(empty($_SESSION["loggedin"])){ /* IF NO USERNAME REGISTERED TO THE SESSION VARIABLE */
  header("LOCATION: login.php"); /* REDIRECT USER TO LOGIN PAGE */
}
?>

<?php

$records = array();

if(!empty($_POST)){
  if(isset($_POST['date'],$_POST['title'],$_POST['content'])){

    $date = trim($_POST['date']);
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);

//insert post into table "reviews"
    if(!empty($title) && !empty($content) && !empty($date)){
      $insert = $db->prepare("INSERT INTO reviews(title, content, date) VALUES(?, ?, ?)");
      $insert->bind_param('sss', $title, $content, $date);

//Add new review to reviews table
        if($insert->execute()){
          header("Refresh:0");
          die();
        }
    }
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>  P & C Casting | Mr. MeowMeow Profile </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>

    <script>
    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }
  </script>

  </head>

  <body>

    <!-- Nav Bar -->
    <?php include("navbar_collapse-logged_in.html"); ?>

    <div class="section bg">
      <div class="container">
        <h1>Mr. Meow Meow</h1>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="col two">
            <img class="profile" src="img/mr-meow-meow_1.png" alt="Jazelle the Gazelle">
            <p><a href="logout.php">logout</a></p>
          </div>
            <div class="responsivegroup"></div>
              <div class="col two">
                <h1 class="service significant">Biography</h1>
                <p>Hello! My name is Mr. Meow Meow. I was born in Valdosta, GA and have since then called LA my home.
                  I've been in numerous feature films. You honestly can't find better talent than me.
                  Find another cat that smells like cinnamon, I dare you.
                  <img src="img/5-stars.png" alt="rating" style="width:90%; height: auto; margin-top: 2%;">
                </p>
              </div>
          </div>
        </div>
      </div>
    </div>

      <div class="section bg">
        <div class="container">
          <!--contact form-->
          <form action = "contact_submit.php" method = "POST"  class="contact">
              <h1>Contact</h1>
              Name: <br>
              <input type="text" name="name"><br><br>
              E-mail: <br>
              <input type="email" name="email"><br><br>
              Comment: <br>
              <textarea name="comment" rows="5" cols="40"></textarea></br>
              <input class="submit" type="submit" name="submit"><br>
          </form>
          </div>
        </div>


      <div class="section">
        <div class="container">
          <h1>Reviews</h1>
          <?php
            //select from db table
              $sql = "SELECT * FROM reviews ORDER BY id DESC";
              //do something with selection
              $results = mysqli_query($db, $sql) or die(mysqli_error());

              if($results->num_rows > 0){
                while($row = $results->fetch_assoc()){
                  echo $row['date'] . "<br>";
                  echo "<br>";
                  echo $row['title'] . "<br>";
                  echo "<br>";
                  echo $row['content'];
                  echo '<p style="margin: 5%;"><hr></p>';
                }
              }else{
                echo "no entries here!";
              }
           ?>
        </div>
      </div>

      <div class="section bg">
        <div class="container">
         <button class="open-button" onclick="openForm()">Write a review!</button>

     <div class="form-popup" id="myForm">
          <!--write a review form-->
          <form action = "" method = "POST" enctype="multipart/form-data">
              <h1>Write a Review!</h1>
              <input placeholder="Today's Date" type="text" name="date"><br><br>
              <input placeholder="Today's Entry Title" type="text" name="title"><br><br>
              <textarea placeholder="Juicy feedback goes here..." name="content" rows="20" cols="50"></textarea></br>
              <input  style="margin-bottom:20px;" class="submit" type="submit" name="post" value="PUBLISH"><br>
          </form>
         <button type="button" class="btn cancel" onclick="closeForm()">I don't want to write a review</button>
       </form>
          </div>
        </div>
      </div>

        <div class="section">
          <div class="container">
            <h1>Highlight Reels</h1>
            <div class="row">
                <div class="column">
                  <img src="img/mr-meow-meow_11.png" style="width:100%">
                  <img src="img/mr-meow-meow_3.png" style="width:100%">
                  <img src="img/mr-meow-meow_8.png" style="width:100%">
                </div>
                <div class="column">
                  <img src="img/mr-meow-meow_7.png" style="width:100%">
                  <img src="img/mr-meow-meow_6.png" style="width:100%">
                  <img src="img/mr-meow-meow_2.png" style="width:100%">
                </div>
                <div class="column">
                  <img src="img/mr-meow-meow_10.png" style="width:100%">
                  <img src="img/mr-meow-meow_9.png" style="width:100%">
                  <img src="img/mr-meow-meow_4.png" style="width:100%">
                </div>
              </div>
            </div>
          </div>
        </div>


    <?php
    include("footer.html");
    ?>

</body>
</html>
