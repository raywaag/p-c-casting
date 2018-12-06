<?php
// error_reporting(0); Set this error reporting off when published to avoid releasing information
require 'db/connect.php';
require 'functions/security.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title> P & C Casting | Post a Job</title>
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
      <h1>Post a Job</h1>
      <p>Follow the guide below to post a job. You're input will be reviewed according to P&C Guidelines. If everything checks out, expect to see
      your posting within the next 24 hours.</p>
    </div>
  </div>

<div class="container">

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
