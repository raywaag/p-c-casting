<?php
// error_reporting(0); Set this error reporting off when published to avoid releasing information
require 'db/connect.php';
require 'functions/security.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>  P & C Casting | Post a Job Comfirmation</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>

  </head>

  <body>

    <!-- Nav Bar -->
    <?php include("navbar_collapse.html"); ?>

  <div class="section bg">
    <div class="container center" style="margin-left:5%">
      <h1>Post a Job</h1>
    </div>
  </div>


  <div class="container">
    <?php
    if(isset($_POST['email'])) {

        function died($error) {
            // your error code can go here
            echo "Hmm, there seems to be someting wrong with your submission. ";
            echo $error."<br /><br />";
            echo "Please try to resolve the error(s) and try again!<br /><br />";
        }


        // validation expected data exists
        if(!isset($_POST['company']) ||
            !isset($_POST['title']) ||
            !isset($_POST['location']) ||
            !isset($_POST['specs']) ||
            !isset($_POST['email'])) {
            died('Seems a bit...empty, don\'t you say?');
        }



        $company = $_POST['company']; // required
        $email_from = $_POST['email']; // required
        $title = $_POST['title']; // required
        $location = $_POST['location']; // required
        $specs = $_POST['specs']; // required

        $error_message = "";
        $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

      if(!preg_match($email_exp,$email_from)) {
        $error_message .= 'That email address isn\'t looking too valid.<br />';
      }

        $string_exp = "/^[A-Za-z .'-]+$/";

      if(!preg_match($string_exp,$company)) {
        $error_message .= 'That does not appear to be an actual name.<br />';
      }

      if(strlen($specs) < 2) {
        $error_message .= 'The description seems rather short. Too short.<br />';
      }

      if(strlen($error_message) > 0) {
        died($error_message);
      }
      else{
    ?>

    <p style="text-align:center; font-size:25px; color:gold;">
      <span style="font-size:30px;">Thank you!</span>
      <br>
      Your form has been submitted and will be reviewed shortly by our team. If the job posting meets our P&C Guidelines,
      it will be up and running in no time!
      </p>


    <?php
      }
    }
    ?>
    <form method="POST" action="post-a-job_submit.php" style="margin-left:-10%;">
            Company Name: <br />
            <input type="text" name="company" id="company" autocomplete="off"><br/>
            Job Title: <br />
            <input type="text" name="title" id="title" autocomplete="off"><br />
            Location: <br />
            <input type="text" name="location" id="location" autocomplete="off"><br />
            Job Specs: <br />
            <textarea type="text" name="specs" id="specs" placeholder="Provide any information that a potential actor or agent will need." autocomplete="off">
            </textarea><br />
            Email: <br />
            <input type="text" name="email"><br />
            <input style="margin-left:1%;" class="submit" type="submit" value="POST" />
    </form>
  </div>


<?php
include("footer.html");
?>

</body>
</html>
