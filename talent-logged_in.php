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

    <script>
    //filter script
    function filterContent() {
    var user = document.getElementById("myDropdown").value;
    var gazelle = document.getElementById("gazelleTalent");
    var lizard = document.getElementById("lizardTalent");
    var gorilla = document.getElementById("gorillaTalent");
    var spider = document.getElementById("spiderTalent");
    var polarBear = document.getElementById("bearTalent");
    var tiger = document.getElementById("tigerTalent");
    var eagle = document.getElementById("eagleTalent");
    var dolphin = document.getElementById("dolphinTalent");
    var dog = document.getElementById("dogTalent");
        if(user=="All") {
        gazelle.style.display="block";
        lizard.style.display="block";
        gorilla.style.display="block";
        spider.style.display="block";
        polarBear.style.display="block";
        tiger.style.display="block";
        eagle.style.display="block";
        dolphin.style.display="block";
        dog.style.display="block";

      } else if (user=="Dogs") {
        gazelle.style.display="none";
        lizard.style.display="none";
        gorilla.style.display="none";
        spider.style.display="none";
        polarBear.style.display="none";
        tiger.style.display="none";
        eagle.style.display="none";
        dolphin.style.display="none";
        dog.style.display="block";
      }
      else if (user=="Cats") {
        gazelle.style.display="none";
        lizard.style.display="none";
        gorilla.style.display="none";
        spider.style.display="none";
        polarBear.style.display="none";
        tiger.style.display="block";
        eagle.style.display="none";
        dolphin.style.display="none";
        dog.style.display="none";
      }
      else if (user=="Birds") {
        gazelle.style.display="none";
        lizard.style.display="none";
        gorilla.style.display="none";
        spider.style.display="none";
        polarBear.style.display="none";
        tiger.style.display="none";
        eagle.style.display="block";
        dolphin.style.display="none";
        dog.style.display="none";
      }
      else if (user=="Reptiles") {
        gazelle.style.display="none";
        lizard.style.display="block";
        gorilla.style.display="none";
        spider.style.display="none";
        polarBear.style.display="none";
        tiger.style.display="none";
        eagle.style.display="none";
        dolphin.style.display="none";
        dog.style.display="none";
      }
      else if (user=="Aquatic") {
        gazelle.style.display="none";
        lizard.style.display="none";
        gorilla.style.display="none";
        spider.style.display="none";
        polarBear.style.display="none";
        tiger.style.display="none";
        eagle.style.display="none";
        dolphin.style.display="block";
        dog.style.display="none";
      }
      else if (user=="Exotic") {
        gazelle.style.display="block";
        lizard.style.display="block";
        gorilla.style.display="block";
        spider.style.display="block";
        polarBear.style.display="block";
        tiger.style.display="block";
        eagle.style.display="none";
        dolphin.style.display="none";
        dog.style.display="none";
      }
    }
    </script>

  </head>

  <body>

    <!-- Nav Bar -->
    <?php include("navbar_collapse-logged_in.html"); ?>

  <div class="section bg">
    <div class="container">
      <h1>Talent Board</h1>
      <h1 class="amount">Discover top talent around the world!</h1>
      </div>
    </div>

  <div class="section">
    <div class="container">
        <h1 class="amount">Filter Results</h1>
        <select id="myDropdown" onchange="filterContent();" class="dropDown">
        	<option value="All">All</option>
          <option value="Dogs">Dogs</option>
          <option value="Cats">Cats</option>
          <option value="Birds">Birds</option>
          <option value="Reptiles">Reptiles</option>
          <option value="Aquatic">Aquatic</option>
          <option value="Exotic">Exotic</option>
        </select>
    </div>
  </div>

      <div class="section bg" id="gazelleTalent">
            <div class="container">
              <div class="col four">
                <img src="img/pexels-photo-257558.jpeg" alt="Jazelle the Gazelle">
                <p>Jazelle the Gazelle</p>
              </div>
              <div class="col four">
                <h1 class="service significant">Location:</h1>
                <p>Franklin, TN</p>
              </div>
                <div class="responsivegroup"></div>
                  <div class="col four">
                    <h1 class="service significant">Top Skills:</h1>
                    <p>Treat Motivated
                      <br>
                      Up to Date Vaccines
                      <br>
                      House Broken
                    </p>
                  </div>
                  <div class="col four">
                      <h1 class="amount" style="font-size:25px;border:1px solid gold; padding:1%; padding-top:5%;"><a href="profile_megan_fox-logged_in.php">Contact Actor</a></h1>
                  <div class="group"></div>
              </div>
            </div>
          </div>


    <div class="section" id="lizardTalent">
      <div class="container">
        <div class="col four">
          <img src="img/pexels-photo-927497.jpeg" alt="Carl the lizard">
          <p>Carl</p>
        </div>
        <div class="col four">
          <h1 class="service significant">Location:</h1>
          <p>Cape Cod, MA</p>
        </div>
          <div class="responsivegroup"></div>
            <div class="col four">
              <h1 class="service significant">Top Skills:</h1>
              <p>Really Cute
                <br>
                Treat Motivated
                <br>
                Loves sweaters (trust me, this is a skill)
              </p>
            </div>
            <div class="col four">
                <h1 class="amount" style="font-size:25px;border:1px solid gold; padding:1%; padding-top:5%;"><a href="profile_megan_fox-logged_in.php">Contact Actor</a></h1>
            <div class="group"></div>
          </div>
        </div>
      </div>


      <div class="section bg" id="gorillaTalent">
        <div class="container">
          <div class="col four">
            <img src="img/gorilla-silverback-monkey-silvery-grey-39586.jpeg" alt="Asger">
            <p>Asger</p>
          </div>
          <div class="col four">
            <h1 class="service significant">Location:</h1>
            <p>Capetown, South Africa</p>
          </div>
            <div class="responsivegroup"></div>
              <div class="col four">
                <h1 class="service significant">Top Skills:</h1>
                <p>Moderate ASL
                  <br>
                  Does yoga on Tuesdays
                  <br>
                  Will work for food
                </p>
              </div>
              <div class="col four">
                  <h1 class="amount" style="font-size:25px;border:1px solid gold; padding:1%; padding-top:5%;"><a href="profile_megan_fox-logged_in.php">Contact Actor</a></h1>
              <div class="group"></div>
            </div>
          </div>
        </div>

        <div class="section" id="spiderTalent">
        <div class="container">
          <div class="col four">
            <img src="img/pexels-photo-257554.jpeg" alt="Mr. Big Eye">
            <p>Mr. Big Eye</p>
          </div>
          <div class="col four">
            <h1 class="service significant">Location:</h1>
            <p>Somewhere on a leaf</p>
          </div>
            <div class="responsivegroup"></div>
              <div class="col four">
                <h1 class="service significant">Top Skills:</h1>
                <p>Builds wicked webs
                  <br>
                  Can spit up to two feet
                  <br>
                  Leaps on people when they aren't looking
                </p>
              </div>
              <div class="col four">
                  <h1 class="amount" style="font-size:25px;border:1px solid gold; padding:1%; padding-top:5%;"><a href="profile_megan_fox-logged_in.php">Contact Actor</a></h1>
              <div class="group"></div>
            </div>
          </div>
        </div>


      <div class="section bg" id="bearTalent">
        <div class="container">
          <div class="col four">
            <img src="img/polar-bear-arctic-wildlife-snow-53425.jpeg" alt="Miss Mint">
            <p>Miss Mint</p>
          </div>
          <div class="col four">
            <h1 class="service significant">Location:</h1>
            <p>Duluth, MN</p>
          </div>
            <div class="responsivegroup"></div>
              <div class="col four">
                <h1 class="service significant">Top Skills:</h1>
                <p>Can stand on back legs
                  <br>
                  Gives hugs on command
                  <br>
                  Responds to all varieties of fish
                </p>
              </div>
              <div class="col four">
                  <h1 class="amount" style="font-size:25px;border:1px solid gold; padding:1%; padding-top:5%;"><a href="profile_megan_fox-logged_in.php">Contact Actor</a></h1>
              <div class="group"></div>
            </div>
          </div>
        </div>


    <div class="section" id="tigerTalent">
      <div class="container">
        <div class="col four">
          <img src="img/tiger-cub-tiger-cub-big-cat-64152.jpeg" alt="Kelly">
          <p>Kelly</p>
        </div>
        <div class="col four">
          <h1 class="service significant">Location:</h1>
          <p>Boggy Bottom, Hertfordshire</p>
        </div>
          <div class="responsivegroup"></div>
            <div class="col four">
              <h1 class="service significant">Top Skills:</h1>
              <p>Performs without violence
                <br>
                Plays Chess in downtime
                <br>
                House Broken
              </p>
            </div>
            <div class="col four">
                <h1 class="amount" style="font-size:25px;border:1px solid gold; padding:1%; padding-top:5%;"><a href="profile_megan_fox-logged_in.php">Contact Actor</a></h1>
            <div class="group"></div>
          </div>
        </div>
      </div>

    <div class="section bg" id="eagleTalent">
      <div class="container">
        <div class="col four">
          <img src="img/white-tailed-eagle-adler-bald-eagle-close-53151.jpeg" alt="(Patriot) Patty the Eagle">
          <p>(Patriot) Patty the Eagle</p>
        </div>
        <div class="col four">
          <h1 class="service significant">Location:</h1>
          <p>'Merica</p>
        </div>
          <div class="responsivegroup"></div>
            <div class="col four">
              <h1 class="service significant">Top Skills:</h1>
              <p>Obeys site boundries (will not fly away)
                <br>
                Enjoys manicures
              </p>
            </div>
            <div class="col four">
                <h1 class="amount" style="font-size:25px;border:1px solid gold; padding:1%; padding-top:5%;"><a href="profile_megan_fox-logged_in.php">Contact Actor</a></h1>
            <div class="group"></div>
          </div>
        </div>
      </div>

  <div class="section" id="dolphinTalent">
    <div class="container">
      <div class="col four">
        <img src="img/dolphin.jpg" alt="Macaque the Dolphin">
        <p>Macaque the Dolphin</p>
      </div>
      <div class="col four">
        <h1 class="service significant">Location:</h1>
        <p>Calgary, CAN</p>
      </div>
        <div class="responsivegroup"></div>
          <div class="col four">
            <h1 class="service significant">Top Skills:</h1>
            <p>Can do math
              <br>
              Hoop Jumping
              <br>
              Gives high fives and kisses
              <br>
              Responds to his name
            </p>
          </div>
          <div class="col four">
              <h1 class="amount" style="font-size:25px;border:1px solid gold; padding:1%; padding-top:5%;"><a href="profile_megan_fox-logged_in.php">Contact Actor</a></h1>
          <div class="group"></div>
        </div>
      </div>
    </div>

  <div class="section bg" id="dogTalent">
    <div class="container">
      <div class="col four">
        <img src="img/DSC_5260.jpg" alt="Finn">
        <p>Finn</p>
      </div>
      <div class="col four">
        <h1 class="service significant">Location:</h1>
        <p>Orlando, FL</p>
      </div>
        <div class="responsivegroup"></div>
          <div class="col four">
            <h1 class="service significant">Top Skills:</h1>
            <p>Emotional peeing
              <br>
              Sneezes when excited
              <br>
              Fist bumps
              <br>
              Rolls over for anything that looks like food
            </p>
          </div>
          <div class="col four">
              <h1 class="amount" style="font-size:25px;border:1px solid gold; padding:1%; padding-top:5%;"><a href="profile_megan_fox-logged_in.php">Contact Actor</a></h1>
          <div class="group"></div>
        </div>
      </div>
    </div>



<?php
include("footer.html");
?>

</body>
</html>
