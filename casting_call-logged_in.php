<!DOCTYPE html>
<html>
  <head>
    <title>  P & C Casting | Casting Call Description </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>

  </head>

  <body>

    <!-- Nav Bar -->
    <?php include("navbar_collapse-logged_in.html"); ?>

    <div class="section bg">
      <div class="container">
        <h1>Friskies Commercial</h1>
        <form method="POST" action="upload.php" enctype="multipart/form-data" style="margin-bottom:-5%;font-size:20px;">
                Submit your Resume:
                <input type="file" name="file"><br />
                <button type="submit" name="submit" style="margin-top:-5%;">UPLOAD</button><br />
        </form>
        </div>
      </div>

    <div class="section">
      <div class="container">
        <div class="icons">
        <h1 class="amount">Production Description</h1>
        <p>It's tough to be the favorite when you're up against 4 other cats. Luckily, Friskies comes in 20 oz jars so you don't have to worry about not getting a treat!</p>
        <div class="section">
          <div class="container">
            <div class="col four">
              <h1 class="service significant">Company</h1>
              <p>Nestle Purina - Friskies
              <br>
              Paul Bulcke
            </p>
            </div>
            <div class="col four">
              <h1 class="service significant">Roles Needed</h1>
              <p>Fluffy Cat 1
                <br>
                Fluffy Cat 2
                <br>
                Orange Cat 3
                <br>
                Various Cat 5
                <br>
                Various Cat 6
              </p>
            </div>
            <div class="responsivegroup"></div>
            <div class="col four">
              <h1 class="service significant">Important Dates</h1>
              <p>Rehersals January 8th & 11th
                <br>
                Shooting January 12th - 14th
              </p>
            </div>
            <div class="col four">
              <h1 class="service significant">Compensation</h1>
              <p>$75 / hr</p>
            </div>
            <div class="group"></div>
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
